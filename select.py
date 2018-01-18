from __future__ import print_function

import multiprocessing
import subprocess
import os
from time import gmtime, strftime
from datetime import datetime
import MySQLdb as my

db = my.connect(host="localhost",
                user="root",
                passwd="mysqleptp",
                db="KLUIOT"
                )

cursor = db.cursor()
id = "FED3"
cursor.execute("SELECT * FROM TableRange")
data = cursor.fetchall ()
# print the rows
for row in data :
    print row[0], row[1]

db.commit()   # you need to call commit() method to save
    # your changes to the database
    
    
db.close()
