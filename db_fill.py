import mysql.connector
import sys
import random


def _mysql_data_enter():
    """
    _mysql implements the mysql C api directly.
    Actually recommended to use MySQLdb which is a wrapper over _mysql module
    """
    try:

        mydb = mysql.connector.connect(
            host="localhost",
            user="root",
            passwd="",
            database="manipal"
        )
        cursor = mydb.cursor()
        count = 1
        diseases = ['Dengue', 'Malaria']
        months = ['January', 'February', 'March', 'April', 'May', 'June',
                  'July', 'August', 'September', 'October', 'November', 'December']
        wards = ['A', 'B', 'C', 'D', 'E', 'FN', 'FS', 'GN', 'GS', 'HE', 'HW', 'KE',
                 'KW', 'L', 'ME', 'MW', 'N', 'PN', 'PS', 'RN', 'RS', 'RC', 'S', 'T']
        for year in range(2017, 2019):
            for month in months:
                for ward in wards:
                    for disease in diseases:
                        if month in ['June', 'July', 'August', 'September'] and ward in ['ME', 'MW', 'L', 'FN']:
                            number = random.randint(700, 2000)
                        elif month in ['February', 'March', 'April', 'May'] and ward in ['ME', 'MW', 'L', 'FN']:
                            number = random.randint(100, 300)
                        elif month in ['October', 'November'] and ward in ['ME', 'MW', 'L', 'FN']:
                            number = random.randint(500, 1000)
                        elif ward in ['ME', 'MW', 'L', 'FN']:
                            number = random.randint(300, 500)
                        elif month in ['June', 'July', 'August', 'September']:
                            number = random.randint(500, 1000)
                        elif month in ['February', 'March', 'April', 'May']:
                            number = random.randint(30, 150)
                        elif month in ['October', 'November']:
                            number = random.randint(300, 500)
                        else:
                            number = random.randint(100, 350)
                        sql = "INSERT INTO chart_Demo (id, disease, region, month, year, number) VALUES (%s, %s, %s, %s, %s, %s)"
                        val = (str(count), str(disease), str(ward),
                               str(month), str(year), str(number))
                        print(str(count), str(disease), str(ward),
                              str(month), str(year), str(number))
                        cursor.execute(sql, val)
                        count += 1
                        mydb.commit()
        print(cursor.lastrowid)
    except mysql.connector.Error as e:
        print("Error %d: %s" % (e.args[0], e.args[1]))
        sys.exit(1)


_mysql_data_enter()
