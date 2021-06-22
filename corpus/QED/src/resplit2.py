""" re-split SRT files """

# pylint: disable=invalid-name, line-too-long, too-many-branches

import sys
import os.path
import logging
import argparse
from tqdm import tqdm
from mosestokenizer import MosesSentenceSplitter

logging.basicConfig(level=logging.INFO)
logging.getLogger('mosestokenizer').setLevel(logging.WARNING)

logger = logging.getLogger('resplit')

parser = argparse.ArgumentParser(prog='srt-moses',
                                 description='Re-split srt text files')

parser.add_argument('-i', '--input',
                    type=str,
                    required=True,
                    help='Input dir')

parser.add_argument('-o', '--output',
                    type=str,
                    required=True,
                    help='Output dir')

args = parser.parse_args()

if not os.path.isdir(args.input):
    logging.warning('Not a directory: %s', args.input)
    sys.exit()

if not os.path.isdir(args.output):
    logging.warning('Not a directory: %s', args.output)
    sys.exit()


def resplit_file(infile: str = None, out: str = None, filesplitter=None):
    """ Resplit srt file """
    follows = False
    lines = []

    with open(infile) as f:
        for line in f.readlines():
            if '-->' in line:
                follows = True
                continue
            elif follows:
                line = line.rstrip()

                if line:
                    lines.append(line)
                else:
                    follows = False

    with open(out, 'w') as of:
        if lines:
            data = []
            curritem = ''

            for line in lines:
                if curritem:
                    curritem += '\n' + line
                else:
                    curritem = line

                if line.endswith('?') or line.endswith('!'):
                    data.append(curritem)
                    curritem = ''

            if curritem:
                data.append(curritem)

#            print(lines)
#            print(data)

            for doc in data:
                for sentence in filesplitter([doc]):
                    print(sentence, file=of)

        else:
            print('', file=of)


logger.info('Processing language directories')

for langdir in tqdm(os.listdir(args.input), position=0, leave=False, desc='dirs'.ljust(10, ' ')):
    fpdir = args.input + '/' + langdir
    if os.path.isdir(fpdir):
        splitter = None
        outpath = None
        langdesc = 'lang='+langdir
        for srtfile in tqdm(os.listdir(fpdir), position=1, leave=False, desc=langdesc.ljust(10, ' ')):
            if srtfile.endswith('.srt'):
                if not splitter:
                    splitter = MosesSentenceSplitter(langdir, more=False)
                    outpath = args.output + '/' + langdir
                    if not os.path.isdir(outpath):
                        os.mkdir(outpath)
                fpfile = fpdir + '/' + srtfile
                outfile = outpath + '/' + srtfile.replace('.srt', '.txt')
                if not os.path.isfile(outfile):
                    # print(fpfile, outfile)
                    resplit_file(fpfile, outfile, splitter)
        if splitter:
            splitter.close()
