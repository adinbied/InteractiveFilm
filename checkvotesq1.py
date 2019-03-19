#!/usr/bin/env python
# coding: utf-8
import rethinkdb as r
r.connect ('localhost', 28015).repl()
takecount = r.db('polltime').table('votes').get_all('1deb6759-ccf2-46a6-ba1a-fcd4e0d78c17', index='choice').count().run()
dontcount = r.db('polltime').table('votes').get_all('65dd10fb-1b88-4369-bdef-aee903cbb84f', index='choice').count().run()
takeint = int(takecount)
dontint = int(dontcount)
file = open("tmp/finalcountq1.txt","w")
if takeint > dontint:
	file.write("TAKE")
else:
	file.write("NO TAKE")
file.close()
