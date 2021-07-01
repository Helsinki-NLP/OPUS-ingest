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
