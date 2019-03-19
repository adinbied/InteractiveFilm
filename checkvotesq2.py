#!/usr/bin/env python
# coding: utf-8
import rethinkdb as r
r.connect ('localhost', 28015).repl()
bringcount = r.db('polltime').table('votes').get_all('8c0e928c-06ba-4297-a712-fe1ea453b53e', index='choice').count().run()
dontbringcount = r.db('polltime').table('votes').get_all('1448fc80-2de3-4832-bb10-38523e7deacf', index='choice').count().run()
bringint = int(bringcount)
dontbringint = int(dontbringcount)
file = open("tmp/finalcountq2.txt","w")
if bringint > dontbringint:
	file.write("BRING")
else:
	file.write("NO")
file.close()
