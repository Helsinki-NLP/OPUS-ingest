

# Conversion from HPLT data

* Would it be better to have subdirs instead of converting '/' to '_'?
* What other characters are converted to '_'
* Should we leave out http(s)___?
* It would be good to copy bicleaner scores as well


# Other improvements

* add doc-level scores (proportion of non-empty alignments (like in OpenSubtitles v2024)
* opus-tools that can output doc-aligned data (also <P> segmentation?)


# Problems with zip-files


* warning about `warning:  filename too long--truncating`: Is that a problem?

* warnings with raw/*.zip files (like tr.zip etc) when adding README and INFO file with `make release`:
  * `zip warning: Local Version Needed To Extract does not match CD`
  * Do we need to run something like `zip -F --out fixed.zip archive1.zip`?
