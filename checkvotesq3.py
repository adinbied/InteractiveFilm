#!/usr/bin/env python
# coding: utf-8
import rethinkdb as r
r.connect ('localhost', 28015).repl()
watchcount = r.db('polltime').table('votes').get_all('d6bcd5ec-f8f0-4db2-964e-f22396df520c', index='choice').count().run()
dontwatchcount = r.db('polltime').table('votes').get_all('2644b23a-973d-42d1-841a-14c131980611', index='choice').count().run()
watchint = int(watchcount)
dontwatchint = int(dontwatchcount)
file = open("tmp/finalcountq3.txt","w")
if watchint > dontwatchint:
	file.write("WATCH")
else:
	file.write("DONT")
file.close()
