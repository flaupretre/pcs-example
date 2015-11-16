
# Pre-process PHP code for inclusion in C code

phpc:
	$(MAKE) -C $(srcdir)/php

cleanup: clean
	phpize --clean
	@if [ -d include ] ; then rmdir include ; fi
	@if [ -d modules ] ; then rmdir modules ; fi
