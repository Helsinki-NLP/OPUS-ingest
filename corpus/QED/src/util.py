""" Split utils """

from typing import List, Iterator
import re

# pylint: disable=invalid-name, line-too-long


def srt_reader(fn: str, max_chunk: int = 50) -> Iterator[List[str]]:
    """ Get chunks from an srt file """
    follows = False

    with open(fn) as f:

        lines = []
        counter = 0

        for line in f.readlines():

            counter += 1
            doyield = False

            if '-->' in line:
                follows = True
                continue
            elif follows:
                line = line.rstrip()
                if line:
                    lines.append(line)
                else:
                    follows = False

            if lines and not follows:
                if re.search(r'[\?\!]$', lines[-1]):
                    doyield = True
                elif counter > max_chunk:
                    doyield = True

                if doyield:
                    yield lines
                    counter = 0
                    lines = []

        if lines:
            yield lines


def _srt_reader(fn: str) -> List[str]:
    """ Get lines from an srt file """

    lines = []

    with open(fn) as f:

        follows = False

        for line in f.readlines():

            if '-->' in line:
                follows = True
                continue
            elif follows:
                line = line.rstrip()
                if line:
#                    print(line)
                    lines.append(line)
                else:
                    follows = False

    return lines


def srt_reader2(fn: str, threshold: float = 0.25, max_chunk: int = 50) -> Iterator[List[str]]:
    """ Get chunks from an srt file """

    lines = _srt_reader(fn)
    num_lines = len(lines)
    dots = 0
    for line in lines:
        if re.search(r'[\?\!\.]$', line):
            dots += 1

    # print(num_lines, dots)
    if num_lines > 0 and dots/num_lines > threshold:
        # sufficient number of dots at the end
        counter = 0
        toyield = []
        doyield = False

        for line in lines:
            counter += 1
            toyield.append(line)

            if re.search(r'[\?\!\.]$', line):
                doyield = True
            elif counter > max_chunk:
                doyield = True

            if doyield:
                yield toyield
                doyield = False
                counter = 0
                toyield = []

        if toyield:
            yield toyield

    else:
        # moses-tokenizer can't re-split the input properly, feed the lines as-is
        for line in lines:
            yield [line]
