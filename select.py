from __future__ import print_function

import multiprocessing
import subprocess
import os
from time import gmtime, strftime
from datetime import datetime
import MySQLdb as my

db1 = my.connect(host="localhost",
                 user="root",
                 passwd="mysqleptp",
                 db="KLUIOT"
                 )

cursor1 = db1.cursor()
cursor1.execute("SELECT * FROM TableRange")
data = cursor1.fetchall()
# print the rows
for row in data :
    print(row[0],row[1])

cursor1.close ()


db1.close()

