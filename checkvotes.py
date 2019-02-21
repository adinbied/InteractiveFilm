#!/usr/bin/env python
# coding: utf-8
import rethinkdb as r
r.connect ('localhost', 28015).repl()
leftcount = r.db('polltime').table('votes').get_all('296377af-56d3-4cb8-8c01-c9b9e65c86da', index='choice').count().run()
rightcount = r.db('polltime').table('votes').get_all('737daad2-a854-4cf7-952f-760e65278568', index='choice').count().run()
leftint = int(leftcount)
rightint = int(rightcount)
file = open("tmp/finalcountq1.txt","w")
file.write("Left: " + str(leftcount) + "\n")
file.write("Right: " + str(rightcount) + "\n")
if leftint > rightint:
	file.write("GOLEFT")
else:
	file.write("GORIGHT")
file.close()
