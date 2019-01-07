INSERT INTO Client(id, name, address, dob, join_date, phone, email, password)VALUES (100000, 'Angel Adams', '4783-Prospect Street', '1949-08-12', '1998-07-10', '5811622397', 'angeladams284@gmail.com', 104);

INSERT INTO Client(id, name, address, dob, join_date, phone, email, password)VALUES (100001, 'Landon Robinson', '97-Walnut Street', '1955-01-26', '2012-11-12', '3853972636', 'landonrobinson751@gmail.com', 224);

INSERT INTO Client(id, name, address, dob, join_date, phone, email, password)VALUES (100002, 'Gabriella Brown', '9858-Warren Street', '1947-10-14', '2000-02-18', '7116567215', 'gabriellabrown608@gmail.com', 295);

INSERT INTO Client(id, name, address, dob, join_date, phone, email, password)VALUES (100003, 'Leah White', '5458-York Road', '1941-01-16', '2013-12-17', '5127614438', 'leahwhite169@gmail.com', 574);

INSERT INTO Client(id, name, address, dob, join_date, phone, email, password)VALUES (100004, 'Daniel Lee', '2537-Brookside Drive', '1950-06-10', '1980-10-22', '2275861164', 'daniellee525@gmail.com', 799);

INSERT INTO Client(id, name, address, dob, join_date, phone, email, password)VALUES (100005, 'Riley Anderson', '3646-Heritage Drive', '1948-12-23', '1983-02-18', '7818488483', 'rileyanderson168@gmail.com', 737);

INSERT INTO Client(id, name, address, dob, join_date, phone, email, password)VALUES (100006, 'Samantha Scott', '4658-8th Street West', '1957-08-11', '1989-03-27', '7580073216', 'samanthascott418@gmail.com', 153);

INSERT INTO Client(id, name, address, dob, join_date, phone, email, password)VALUES (100007, 'Jack Jones', '3631-Creekside Drive', '1956-10-13', '1977-09-12', '5967904843', 'jackjones569@gmail.com', 574);

INSERT INTO Client(id, name, address, dob, join_date, phone, email, password)VALUES (100008, 'John Thompson', '988-Walnut Street', '1958-06-15', '1984-03-13', '3266208833', 'johnthompson324@gmail.com', 724);

INSERT INTO Client(id, name, address, dob, join_date, phone, email, password)VALUES (100009, 'Khloe Collins', '8276-Hanover Court', '1950-07-13', '2014-02-27', '3287121996', 'khloecollins376@gmail.com', 301);

INSERT INTO Client(id, name, address, dob, join_date, phone, email, password)VALUES (100010, 'Christopher Turner', '9262-Howard Street', '1946-03-25', '1985-08-14', '4010181863', 'christopherturner640@gmail.com', 554);

INSERT INTO Client(id, name, address, dob, join_date, phone, email, password)VALUES (100011, 'Ashley Carter', '8201-Lantern Lane', '1957-03-18', '2017-12-24', '5452691321', 'ashleycarter320@gmail.com', 568);

INSERT INTO Client(id, name, address, dob, join_date, phone, email, password)VALUES (100012, 'Zoe Phillips', '5529-Pin Oak Drive', '1958-05-12', '2000-12-27', '5282888145', 'zoephillips529@gmail.com', 416);

INSERT INTO Client(id, name, address, dob, join_date, phone, email, password)VALUES (100013, 'Natalie Hall', '7032-Broad Street', '1944-06-27', '1976-05-12', '7258516298', 'nataliehall172@gmail.com', 865);

INSERT INTO Client(id, name, address, dob, join_date, phone, email, password)VALUES (100014, 'Alexander Edwards', '4083-Cedar Court', '1954-10-10', '1998-10-26', '9077905565', 'alexanderedwards281@gmail.com', 393);

INSERT INTO Client(id, name, address, dob, join_date, phone, email, password)VALUES (100015, 'Caleb Clark', '7959-Willow Lane', '1954-05-10', '2013-02-25', '7516311377', 'calebclark495@gmail.com', 348);

INSERT INTO Client(id, name, address, dob, join_date, phone, email, password)VALUES (100016, 'Michael Anderson', '7869-5th Street North', '1956-10-24', '2004-12-22', '3638065378', 'michaelanderson335@gmail.com', 136);

INSERT INTO Client(id, name, address, dob, join_date, phone, email, password)VALUES (100017, 'Sarah Lopez', '2895-Fawn Lane', '1958-04-22', '2013-09-18', '2981426260', 'sarahlopez486@gmail.com', 147);

INSERT INTO Client(id, name, address, dob, join_date, phone, email, password)VALUES (100018, 'Logan White', '6474-Pennsylvania Avenue', '1958-03-10', '1973-11-21', '6042137052', 'loganwhite522@gmail.com', 870);

INSERT INTO Client(id, name, address, dob, join_date, phone, email, password)VALUES (100019, 'Makayla Collins', '6044-York Road', '1953-07-10', '2013-08-18', '9310051654', 'makaylacollins154@gmail.com', 312);

INSERT INTO Branch(id, opening_date, location, phone, fax)VALUES (1, '1998-05-12', 'Montreal', '6317731127', '6220486633');

INSERT INTO Branch(id, opening_date, location, phone, fax)VALUES (2, '1978-07-10', 'Toronto', '5289121389', '5628751494');

INSERT INTO Branch(id, opening_date, location, phone, fax)VALUES (3, '1971-05-23', 'Calgary', '5353677853', '5224990854');

INSERT INTO Branch(id, opening_date, location, phone, fax)VALUES (4, '1986-01-24', 'Edmonton', '3878013877', '4874864026');

INSERT INTO Branch(id, opening_date, location, phone, fax)VALUES (5, '2018-06-25', 'Vancouver', '4674818994', '6555318761');

INSERT INTO ChargePlan(option_, transaction_limits, monthly_charge, overage_fee)VALUES ('basic', 30, 0, 10);

INSERT INTO ChargePlan(option_, transaction_limits, monthly_charge, overage_fee)VALUES ('standard', 100, 10, 20);

INSERT INTO ChargePlan(option_, transaction_limits, monthly_charge, overage_fee)VALUES ('premium', 3000, 20, 300);

INSERT INTO ChargePlan(option_, transaction_limits, monthly_charge, overage_fee)VALUES ('professional', 50000, 50, 600);

INSERT INTO ChargePlan(option_, transaction_limits, monthly_charge, overage_fee)VALUES ('none', 0, 0, 0);

INSERT INTO Type(name, category)VALUES ('savings', 'asset');

INSERT INTO Type(name, category)VALUES ('checking', 'asset');

INSERT INTO Type(name, category)VALUES ('credit', 'liability');

INSERT INTO Type(name, category)VALUES ('loan', 'liability');

INSERT INTO Type(name, category)VALUES ('bill', 'bill');

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (300000, '2009-12-23', 'Christian Martinez', '2918-Glenwood Drive', 'christianmartinez871@gmail.com', '9643387856', 'Teller', 4196, 10, 14, 2575, 5);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (300001, '2003-01-12', 'Zoey Young', '8167-Garfield Avenue', 'zoeyyoung583@gmail.com', '4427261019', 'Teller', 9465, 10, 14, 3584, 5);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (300002, '2009-09-13', 'Alexa Harris', '3726-8th Street West', 'alexaharris864@gmail.com', '6213300554', 'Teller', 3863, 10, 14, 808, 4);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (300003, '2007-04-20', 'Hannah Carter', '9150-Warren Street', 'hannahcarter567@gmail.com', '4579700929', 'Teller', 3435, 10, 14, 8990, 3);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (300004, '2015-01-12', 'James Harris', '8973-Broad Street', 'jamesharris232@gmail.com', '6239980616', 'Teller', 3055, 10, 14, 3283, 4);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (300005, '2014-12-27', 'Taylor Anderson', '613-Broadway', 'tayloranderson721@gmail.com', '5657130314', 'Teller', 2295, 10, 14, 3509, 5);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (300006, '2009-09-25', 'Alexis Evans', '8830-Broad Street', 'alexisevans1@gmail.com', '2873945240', 'Teller', 8655, 10, 14, 3203, 1);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (300007, '2017-02-14', 'Layla Lewis', '8863-Washington Avenue', 'laylalewis826@gmail.com', '4325570734', 'Teller', 8185, 10, 14, 3005, 5);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (300008, '2014-01-10', 'Zoey King', '5300-Pin Oak Drive', 'zoeyking765@gmail.com', '8489232545', 'Teller', 9420, 10, 14, 5524, 5);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (300009, '2018-09-14', 'James Collins', '6597-Elm Avenue', 'jamescollins142@gmail.com', '3740143730', 'Teller', 5983, 10, 14, 5788, 4);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (300010, '2014-08-12', 'Makayla Jackson', '1933-Fawn Court', 'makaylajackson658@gmail.com', '5226483221', 'Teller', 4694, 10, 14, 1157, 1);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (300011, '2014-02-11', 'Brooklyn Moore', '5242-Park Avenue', 'brooklynmoore500@gmail.com', '4055679225', 'Teller', 7176, 10, 14, 7128, 5);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (300012, '2016-06-26', 'Jackson Mitchell', '7102-Washington Avenue', 'jacksonmitchell30@gmail.com', '4813986291', 'Teller', 7251, 10, 14, 3258, 3);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (300013, '2004-11-20', 'Ashley Green', '5314-Buckingham Drive', 'ashleygreen667@gmail.com', '3937255738', 'Teller', 5890, 10, 14, 4119, 5);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (300014, '2001-08-11', 'Khloe Taylor', '8082-Pennsylvania Avenue', 'khloetaylor931@gmail.com', '8893276127', 'Teller', 2073, 10, 14, 5117, 3);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (300015, '2005-06-21', 'Gavin Perez', '7913-Ann Street', 'gavinperez580@gmail.com', '3422987262', 'Teller', 5283, 10, 14, 9428, 3);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (300016, '2011-01-24', 'Luke Scott', '8327-Buckingham Drive', 'lukescott706@gmail.com', '4449389007', 'Teller', 3858, 10, 14, 1497, 3);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (300017, '2012-02-14', 'Abigail Johnson', '9526-Pin Oak Drive', 'abigailjohnson256@gmail.com', '3146245914', 'Teller', 2482, 10, 14, 7241, 5);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (300018, '2007-03-24', 'Owen Wilson', '4651-Orchard Avenue', 'owenwilson346@gmail.com', '3333548151', 'Teller', 5128, 10, 14, 9204, 3);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (300019, '2014-01-11', 'Daniel Thompson', '6572-Rosewood Drive', 'danielthompson769@gmail.com', '9234506698', 'Teller', 3087, 10, 14, 5281, 5);

INSERT INTO Manager(id, manager_id, branch_id)VALUES (1, 400001, 1);

INSERT INTO Manager(id, manager_id, branch_id)VALUES (2, 400002, 2);

INSERT INTO Manager(id, manager_id, branch_id)VALUES (3, 400003, 3);

INSERT INTO Manager(id, manager_id, branch_id)VALUES (4, 400004, 4);

INSERT INTO Manager(id, manager_id, branch_id)VALUES (5, 400005, 5);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (400001, '2016-09-17', 'Joshua Williams', '6044-Jackson Avenue', 'joshuawilliams149@gmail.com', '5837239279', 'Branch Manager', 7322, 10, 14, 5091, 1);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (400002, '2015-09-17', 'Olivia Smith', '5597-5th Street South', 'oliviasmith360@gmail.com', '6518622657', 'Branch Manager', 9469, 10, 14, 2624, 2);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (400003, '2006-03-24', 'Gavin Hernandez', '9367-5th Street South', 'gavinhernandez473@gmail.com', '8429941054', 'Branch Manager', 5685, 10, 14, 2435, 3);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (400004, '2014-05-13', 'Khloe Brown', '3213-Cedar Court', 'khloebrown512@gmail.com', '4009823557', 'Branch Manager', 8203, 10, 14, 6932, 4);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (400005, '2018-07-11', 'Matthew Rodriguez', '3830-Hamilton Street', 'matthewrodriguez79@gmail.com', '3365555651', 'Branch Manager', 3256, 10, 14, 9774, 5);

INSERT INTO GeneralManager(id, employee_id, service)VALUES (1, 500001, 'banking');

INSERT INTO GeneralManager(id, employee_id, service)VALUES (2, 500002, 'insurance');

INSERT INTO GeneralManager(id, employee_id, service)VALUES (3, 500003, 'investment');

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (111111, '2000-10-12', 'Robert Flechly', '2006-Lantern Lane', 'robertflechly222@gmail.com', '4416246539', 'President', 2952, 10, 14, 3295, 1);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (500001, '2018-07-22', 'Gabriella Mitchell', '6131-Glenwood Drive', 'gabriellamitchell80@gmail.com', '9710847227', 'General Manager', 7693, 10, 14, 3927, 1);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (500002, '2013-04-15', 'Benjamin Hall', '7921-Warren Street', 'benjaminhall748@gmail.com', '5808462036', 'General Manager', 8475, 10, 14, 6560, 1);

INSERT INTO Employee(id, start_date, name, address, email, phone, title, monthly_pay, sick_days, holidays, password, branch_id)VALUES (500003, '2013-09-16', 'Emily Parker', '6469-Catherine Street', 'emilyparker575@gmail.com', '6751709377', 'General Manager', 4909, 10, 14, 4988, 1);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200000, 'checking', 'business', 51779, 0, 'professional', 0, 0, 100019, 5);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200001, 'credit', 'business', -354, -14758, 'none', 25, 0, 100019, 2);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200002, 'checking', 'business', 193643, 0, 'professional', 0, 0, 100016, 5);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200003, 'loan', 'business', -144345, -362834, 'none', 40, 0, 100017, 2);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200004, 'savings', 'personal', 192269, 0, 'premium', 2, 0, 100005, 4);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200005, 'loan', 'corporate', -240079, -338071, 'none', 32, 0, 100019, 2);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200006, 'loan', 'personal', -242459, -397587, 'none', 30, 0, 100015, 1);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200007, 'savings', 'corporate', 84730, 0, 'premium', 2, 0, 100007, 4);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200008, 'checking', 'business', 188018, 0, 'standard', 0, 0, 100002, 2);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200009, 'credit', 'corporate', -143, -80515, 'none', 37, 0, 100002, 2);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200010, 'savings', 'corporate', 88885, 0, 'premium', 2, 0, 100005, 5);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200011, 'savings', 'corporate', 68524, 0, 'professional', 2, 0, 100009, 2);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200012, 'checking', 'business', 105776, 0, 'premium', 0, 0, 100001, 2);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200013, 'loan', 'business', -149650, -313723, 'none', 24, 0, 100014, 2);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200014, 'loan', 'corporate', -6847, -366771, 'none', 24, 0, 100019, 2);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200015, 'credit', 'corporate', -318, -3401, 'none', 31, 0, 100019, 1);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200016, 'loan', 'corporate', -147870, -304695, 'none', 34, 0, 100013, 3);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200017, 'credit', 'corporate', -327, -27332, 'none', 25, 0, 100009, 3);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200018, 'savings', 'personal', 33599, 0, 'premium', 2, 0, 100005, 2);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200019, 'credit', 'business', -232, -76240, 'none', 21, 0, 100013, 4);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200020, 'loan', 'corporate', -73465, -368362, 'none', 38, 0, 100008, 5);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200021, 'credit', 'corporate', -150, -17500, 'none', 26, 0, 100018, 1);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200022, 'savings', 'business', 196888, 0, 'standard', 2, 0, 100009, 5);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200023, 'loan', 'corporate', -194404, -313493, 'none', 29, 0, 100010, 3);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200024, 'savings', 'personal', 90364, 0, 'professional', 2, 0, 100017, 4);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200025, 'credit', 'corporate', -228, -23620, 'none', 35, 0, 100008, 1);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200026, 'loan', 'business', -298029, -373746, 'none', 23, 0, 100016, 2);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200027, 'credit', 'business', -421, -7788, 'none', 34, 0, 100009, 5);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200028, 'credit', 'personal', -478, -95144, 'none', 17, 0, 100009, 5);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200029, 'checking', 'corporate', 16000, 0, 'basic', 0, 0, 100010, 1);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200030, 'credit', 'personal', -116, -77544, 'none', 19, 0, 100017, 1);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200031, 'credit', 'corporate', -350, -18207, 'none', 16, 0, 100003, 1);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200032, 'savings', 'personal', 4905, 0, 'professional', 2, 0, 100007, 3);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200033, 'checking', 'personal', 45624, 0, 'premium', 0, 0, 100004, 2);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200034, 'savings', 'personal', 63019, 0, 'professional', 2, 0, 100001, 4);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200035, 'credit', 'personal', -407, -19924, 'none', 40, 0, 100018, 2);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200036, 'checking', 'corporate', 28127, 0, 'professional', 0, 0, 100008, 1);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200037, 'loan', 'corporate', -189564, -342943, 'none', 21, 0, 100005, 4);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200038, 'credit', 'corporate', -380, -72527, 'none', 30, 0, 100017, 3);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200039, 'credit', 'corporate', -361, -61739, 'none', 29, 0, 100001, 5);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200040, 'loan', 'business', -57272, -374556, 'none', 24, 0, 100011, 1);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200041, 'credit', 'business', -376, -99588, 'none', 20, 0, 100004, 4);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200042, 'checking', 'personal', 159160, 0, 'professional', 0, 0, 100010, 3);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200043, 'checking', 'corporate', 149509, 0, 'professional', 0, 0, 100019, 4);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200044, 'checking', 'business', 98873, 0, 'premium', 0, 0, 100014, 5);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200045, 'credit', 'corporate', -14, -47618, 'none', 33, 0, 100009, 3);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200046, 'checking', 'personal', 184093, 0, 'basic', 0, 0, 100009, 4);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200047, 'checking', 'business', 190542, 0, 'professional', 0, 0, 100001, 2);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200048, 'credit', 'corporate', -429, -18080, 'none', 22, 0, 100002, 5);

INSERT INTO Account(id, type_, level, balance, liability_limit, option_, interest_rate, transaction_count, client_id, branch_id)VALUES (200049, 'loan', 'corporate', -165358, -340114, 'none', 28, 0, 100012, 5);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (1, 300000, False, True, False, True, True, False, True);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (2, 300001, True, True, True, True, True, True, True);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (3, 300002, True, False, False, False, False, True, True);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (4, 300003, False, True, True, False, True, False, True);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (5, 300004, True, True, True, True, True, True, True);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (6, 300005, False, True, True, False, True, True, True);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (7, 300006, False, True, True, True, False, False, True);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (8, 300007, True, True, False, True, True, False, True);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (9, 300008, False, True, False, True, False, True, False);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (10, 300009, False, True, True, True, False, False, True);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (11, 300010, False, True, True, False, False, True, True);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (12, 300011, True, False, True, True, True, True, True);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (13, 300012, True, True, True, False, False, False, True);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (14, 300013, False, True, True, True, False, True, False);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (15, 300014, False, True, True, True, False, True, True);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (16, 300015, False, False, True, True, True, True, False);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (17, 300016, True, True, True, False, False, True, False);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (18, 300017, True, True, True, False, False, True, True);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (19, 300018, True, True, True, False, False, False, False);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (20, 300019, False, True, True, False, True, True, True);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (21, 400001, True, True, False, True, True, False, True);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (22, 400002, False, False, False, True, True, True, True);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (23, 400003, True, False, False, False, False, False, True);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (24, 400004, True, True, True, True, True, True, True);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (25, 400005, True, False, True, True, True, False, True);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (26, 500001, False, True, True, False, False, False, False);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (27, 500002, True, False, True, False, False, True, False);

INSERT INTO Schedule(id, employee_id, monday, tuesday, wednesday, thursday, friday, saturday, sunday)VALUES (28, 500003, False, True, False, True, True, True, True);

INSERT INTO Admin(id, email, password)VALUES (0, 'admin@353bank.com', 'rootpass123');

INSERT INTO Bill(id, account_id, name, amount,recurring)VALUES (1, 200000, 'Internet', 71, False);

INSERT INTO Bill(id, account_id, name, amount,recurring)VALUES (2, 200001, 'Internet', 87, True);

INSERT INTO Bill(id, account_id, name, amount,recurring)VALUES (3, 200002, 'Internet', 89, False);

INSERT INTO Bill(id, account_id, name, amount,recurring)VALUES (4, 200003, 'Phone', 98, True);

INSERT INTO Bill(id, account_id, name, amount,recurring)VALUES (5, 200004, 'Phone', 70, True);

INSERT INTO Bill(id, account_id, name, amount,recurring)VALUES (6, 200005, 'Phone', 86, True);

INSERT INTO Bill(id, account_id, name, amount,recurring)VALUES (7, 200006, 'Internet', 95, False);

INSERT INTO Bill(id, account_id, name, amount,recurring)VALUES (8, 200007, 'Electric', 92, False);

INSERT INTO Bill(id, account_id, name, amount,recurring)VALUES (9, 200008, 'Electric', 34, False);

INSERT INTO Bill(id, account_id, name, amount,recurring)VALUES (10, 200009, 'Internet', 89, True);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (1, 200005, 200028, '2013-04-24', 'bill', 922.22);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (2, 200006, 200029, '2015-03-16', 'bill', 5136.95);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (3, 200007, 200030, '2010-06-24', 'bill', 5400.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (4, 200008, 200031, '2008-10-22', 'bill', 6269.12);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (5, 200009, 200032, '2008-05-10', 'bill', 712.16);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (6, 200010, 200033, '2018-08-17', 'bill', 6137.2);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (7, 200011, 200034, '2014-10-12', 'bill', 2367.07);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (8, 200012, 200035, '2008-05-16', 'bill', 1902.17);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (9, 200013, 200008, '2012-01-21', 'bill', 7100.79);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (10, 200014, 200009, '2014-03-19', 'bill', 2870.01);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (11, 200015, 200010, '2017-05-10', 'bill', 7705.7);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (12, 200016, 200011, '2013-06-15', 'bill', 8275.28);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (13, 200017, 200000, '2010-09-24', 'bill', 5402.78);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (14, 200018, 200001, '2014-05-25', 'bill', 2456.13);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (15, 200019, 200002, '2010-06-13', 'bill', 2926.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (16, 200000, 200003, '2011-09-10', 'bill', 1333.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (17, 200001, 200004, '2010-11-20', 'bill', 8421.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (18, 200002, 200005, '2018-10-19', 'bill', 3275.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (19, 200003, 200006, '2013-01-12', 'bill', 6267.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (20, 200004, 200007, '2012-04-24', 'bill', 6046.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (21, 200024, 200008, '2009-07-26', 'bill', 9407.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (22, 200025, 200009, '2014-09-11', 'transfer', 1897.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (23, 200026, 200010, '2017-03-16', 'transfer', 4357.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (24, 200027, 200011, '2014-07-17', 'transfer', 880.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (25, 200028, 200012, '2009-10-12', 'transfer', 7596.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (26, 200029, 200013, '2014-02-24', 'transfer', 5076.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (27, 200030, 200014, '2008-08-11', 'transfer', 8755.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (28, 200031, 200015, '2017-06-14', 'transfer', 6813.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (29, 200032, 200016, '2008-11-25', 'transfer', 7090.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (30, 200033, 200017, '2012-11-16', 'transfer', 7600.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (31, 200034, 200018, '2012-03-19', 'transfer', 4933.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (32, 200035, 200019, '2013-11-24', 'transfer', 9671.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (33, 200036, 200020, '2014-08-10', 'transfer', 6026.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (34, 200037, 200021, '2010-02-23', 'transfer', 5452.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (35, 200038, 200022, '2015-02-11', 'transfer', 3804.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (36, 200039, 200033, '2010-04-14', 'transfer', 4250.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (37, 200040, 200034, '2011-08-18', 'transfer', 7799.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (38, 200041, 200035, '2009-12-12', 'transfer', 1434.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (39, 200042, 200036, '2008-04-27', 'transfer', 130.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (40, 200043, 200037, '2008-03-17', 'transfer', 773.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (41, 200044, 200038, '2011-12-11', 'transfer', 4365.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (42, 200045, 200039, '2010-02-17', 'transfer', 193.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (43, 200046, 200040, '2017-06-17', 'transfer', 4021.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (44, 200047, 200041, '2016-09-15', 'transfer', 5996.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (45, 200048, 200042, '2014-12-20', 'transfer', 9793.0);

INSERT INTO Transaction(id, sender, receiver, date, category, amount)VALUES (46, 200049, 200043, '2012-12-26', 'transfer', 6109.0);



    
    DELIMITER $$
 
/*!50003 CREATE PROCEDURE UPDA()
BEGIN
   UPDATE Account
	NATURAL JOIN ChargePlan AS c
	SET balance = balance - c.monthly_charge;
	UPDATE Account
	NATURAL JOIN ChargePlan AS c
	SET balance = balance - c.overage_fee
	WHERE c.transaction_limits > 0 AND transaction_count - c.transaction_limits > 0;
  
END */$$
DELIMITER ;



SET GLOBAL event_scheduler = ON;
CREATE EVENT IF NOT EXISTS monthly_option_charges
ON SCHEDULE EVERY '1' MONTH
STARTS '2018-11-30 00:00:00'
DO

call UPDA();