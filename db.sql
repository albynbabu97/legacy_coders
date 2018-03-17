create table userv(mobileno varchar(15),password varchar(15));
insert into userv values(8289887872,'pass');

create table userp(mobileno varchar(15),fname varchar(15),lname varchar(15),email varchar(30),idno varchar(15),userid int primary key AUTO_INCREMENT);
insert into userp(mobileno,fname,lname,email,idno) values(8289887872,'Manu','John','manuyohannan123@gmail.com','455082514466');

create table userl(mobileno varchar(15),place varchar(15));
insert into userl values(8289887872,'kochi');
insert into userl values(9037959684,'kochi');

create table hospital(aname varchar(20),regno varchar(10),addr varchar(30),place varchar(15),rate int, mobileno varchar(20), email varchar(30), parking int,types varchar(2));
insert into hospital values('','','','',,,'',,'h');
insert into hospital values('','','','',,,'',,'h');
insert into hospital values('','','','',,,'',,'h');
insert into hospital values('','','','',,,'',,'h');


create table pharmacy(aname varchar(20),regno varchar(10),addr varchar(30),place varchar(15),rate int, mobileno varchar(20), email varchar(30), parking int,types varchar(2));
insert into pharmacy values('','','','',,,'',,'p');
insert into pharmacy values('','','','',,,'',,'p');
insert into pharmacy values('','','','',,,'',,'p');
insert into pharmacy values('','','','',,,'',,'p');


create table lab(aname varchar(20),regno varchar(10),addr varchar(30),place varchar(15),rate int, mobileno varchar(20), email varchar(30), parking int,types varchar(2));
insert into lab values('','','','',,,'',,'l');
insert into lab values('','','','',,,'',,'l');
insert into lab values('','','','',,,'',,'l');
insert into lab values('','','','',,,'',,'l');


create table dental(aname varchar(20),regno varchar(10),addr varchar(30),place varchar(15),rate int, mobileno varchar(20), email varchar(30), parking int,types varchar(2));
insert into dental values('','','','',,,'',,'d');
insert into dental values('','','','',,,'',,'d');
insert into dental values('','','','',,,'',,'d');
insert into dental values('','','','',,,'',,'d');

create table serve(sname varchar(20),rate int,types varchar(2),aname varchar(20),dname varchar(20),ddegree varchar(20));
insert into serve values('',,'','','','');
insert into serve values('',,'','','','');
insert into serve values('',,'','','','');
insert into serve values('',,'','','','');
insert into serve values('',,'','','','');
insert into serve values('',,'','','','');
insert into serve values('',,'','','','');
insert into serve values('',,'','','','');
insert into serve values('',,'','','','');
insert into serve values('',,'','','','');
insert into serve values('',,'','','','');
insert into serve values('',,'','','','');
insert into serve values('',,'','','','');
insert into serve values('',,'','','','');
insert into serve values('',,'','','','');
insert into serve values('',,'','','','');
insert into serve values('',,'','','','');
insert into serve values('',,'','','','');
insert into serve values('',,'','','','');
insert into serve values('',,'','','','');
insert into serve values('',,'','','','');
insert into serve values('',,'','','','');
insert into serve values('',,'','','','');
