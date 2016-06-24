#!/usr/bin/env python
#
# Converted from mary.rb found in ruby_nxt package
# Plays "Mary Had A Little Lamb"
# Author: Christopher Continanza <christopher.continanza@villanova.edu>

from time import sleep
import nxt

ID = '00:16:53:0F:24:C0'

from nxt.bluesock import BlueSock



sock = 	BlueSock(ID)
b = sock.connect()

#b.stop_program()
b.start_program('stapler2.rxe')
#b.StartProgram("kostwein.rxe")

sock.close;
