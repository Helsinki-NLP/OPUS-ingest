""" re-split SRT files """

# pylint: disable=invalid-name, line-too-long, too-many-branches

from typing import Dict, List, Iterator

import sys
import os.path
import logging
import collections
import argparse
from tqdm import tqdm
from mosestokenizer import MosesSentenceSplitter
from util import srt_reader, srt_reader2

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

parser.add_argument('-l', '--language',
                    type=None,
                    help='Language')

args = parser.parse_args()

if not os.path.isdir(args.input):
    logging.warning('Not a directory: %s', args.input)
    sys.exit()

if not os.path.isdir(args.output):
    logging.warning('Not a directory: %s', args.output)
    sys.exit()


def resplit_file(f: str = None, out: str = None, filesplitter=None):
    """ Resplit srt file """

    with open(out, 'w') as of:

#        for ls in srt_reader(f, max_chunk=0):
        for ls in srt_reader2(f):

            # data = '\n'.join(ls)
            # print(data)
            for sentence in filesplitter(ls):
                print(sentence, file=of)

logger.info('Scanning language directories')

# Record files to be processed first
filesets = collections.defaultdict()
total = 0

for langdir in tqdm(os.listdir(args.input)):
    if args.language and args.language != langdir:
        continue
    fpdir = args.input + '/' + langdir
    if os.path.isdir(fpdir):
        for srtfile in os.listdir(fpdir):
            origpath = '/'.join([args.input, langdir, srtfile])
            outpath = args.output + '/' + langdir
            outfile = outpath + '/' + srtfile.replace('.srt', '.txt')
            if srtfile.endswith('.srt') and not os.path.isfile(outfile):
                if langdir not in filesets:
                    if not os.path.isdir(outpath):
                        os.mkdir(outpath)
                    filesets[langdir] = []
                filesets[langdir].append([origpath, outfile])
                total += 1

# print(filesets)

def set_reader(dirs: Dict) -> Iterator[List[str]]:
    """ Iterate over language dir sets """

    for ldir in dirs:
        for pair in dirs[ldir]:
            yield ldir, pair[0], pair[1]

splitter = None
uselang = None

logger.info('%d files to process for %d languages', total, len(filesets.keys()))
logger.info('Processing language directories')

for lang, infile, outfile in tqdm(set_reader(filesets), total=total):
    if uselang != lang:
        if splitter:
            splitter.close()
        uselang = lang
        # TODO: more=True might make sense for some languages
        splitter = MosesSentenceSplitter(lang, more=False, even_more=True)

#    print(lang, infile, outfile)
    resplit_file(infile, outfile, splitter)

if splitter:
    splitter.close()

#sys.exit()
#
#for langdir in tqdm(os.listdir(args.input), position=0, leave=True, desc='dirs'.ljust(10, ' ')):
#    fpdir = args.input + '/' + langdir
#    if os.path.isdir(fpdir):
#        splitter = None
#        outpath = None
#        langdesc = 'lang='+langdir
#        outpath = args.output + '/' + langdir
#        if not os.path.isdir(outpath):
#            os.mkdir(outpath)
#
#        for srtfile in tqdm(os.listdir(fpdir), position=1, leave=False, desc=langdesc.ljust(10, ' ')):
#            if srtfile.endswith('.srt'):
#                outfile = outpath + '/' + srtfile.replace('.srt', '.txt')
#                if not os.path.isfile(outfile):
#                    fpfile = fpdir + '/' + srtfile
#                    if not splitter:
#                        splitter = MosesSentenceSplitter(langdir, more=False, even_more=True)
#                    resplit_file(fpfile, outfile, splitter)
#        if splitter:
#            splitter.close()
