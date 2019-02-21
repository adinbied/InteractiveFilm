# Interactive Film

My work-in-progress group interactive film project. 

Based on RethinkDB 

RethinkDB is database engine designed for real time time web. In this codebase you will get complete codebase to develop polling app using Nodejs and rethinkDB.

## Current Setup
```
screen 
rethinkdb --bind all
[ctrl+A+D]
screen
git clone && cd rethinkdb-poll-demo
npm install
node app.js
[ctrl+A+D]
Postman
```


TODO: 
Film Check votes and go to which way after given time


## How to run the code

Make sure you have RethinkDB installed in your system. Run rethinkDB server by running following command.

```
rethinkdb
```
You need **bower** installed globally in your system to get the required user interface libraries. Run following command to install it globally.
```
npm install bower -g
```
Go to project directory and run following command to install all node module.

```
npm install
```
After installation, run the node application using following command.

```
node app.js
```
Visit **localhost:3000** to view the app.

## Tutorial

* https://codeforgeek.com/2016/02/getting-started-with-rethinkdb/
* https://codeforgeek.com/2016/03/building-real-time-polling-app-rethinkdb-nodejs
