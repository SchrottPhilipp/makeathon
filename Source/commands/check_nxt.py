#!/usr/bin/env python

from time import sleep
import nxt

ID = '00:16:53:17:41:FE'
IDD = '00:16:53:17:47:6F'
from nxt.bluesock import BlueSock



sock = 	BlueSock(IDD)
b = sock.connect()


#b.stop_program()
string = b.get_current_program_name()
print string

#b.StartProgram("kostwein.rxe")

sock.close;
