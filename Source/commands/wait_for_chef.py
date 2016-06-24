#!/usr/bin/env python

from time import sleep
import nxt

ID = '00:16:53:0F:24:C0'
from nxt.bluesock import BlueSock



sock = 	BlueSock(ID)
b = sock.connect()


#b.stop_program()
string = b.get_current_program_name()
print string

#b.StartProgram("kostwein.rxe")

sock.close;
