
import mysql.connector as MySQL
import config

myconn = MySQL.connect(host = config.MYSQL_HOST, user = config.MYSQL_USER,passwd = config.MYSQL_PASSWORD, database = config.MYSQL_DB)  


def AllBanksSelect():
    Banks = []
    #creating the cursor object  
    cur = myconn.cursor()  

    try:  
        dbs = cur.execute("select bankname from Banks")  
    except:  
        myconn.rollback()  
    for x in cur:
        Banks.append(x[0])
    return Banks