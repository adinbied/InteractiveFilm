#!/usr/bin/env python
# coding: utf-8
import rethinkdb as r
r.connect ('localhost', 28015).repl()
watchcount = r.db('polltime').table('votes').get_all('b0aae840-f52e-4bdd-abcd-74789f52c6bd', index='choice').count().run()
dontwatchcount = r.db('polltime').table('votes').get_all('a966c7b3-9277-4c09-9254-8806762bbea0', index='choice').count().run()
watchint = int(watchcount)
dontwatchint = int(dontwatchcount)
file = open("tmp/finalcountq4.txt","w")
if watchint > dontwatchint:
	file.write("TRY")
else:
	file.write("GIVE")
file.close()
