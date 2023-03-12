--To create table
create table Student(
		id int not null, 
		name varchar(50) not null,
		address varchar(30) not null, 
		faculty varchar(20) not null,
	); 


--To insert values into table
insert into Student 
(id, name, address,faculty)
values(101,"Nirmal Neupane", "Bharatpur-9","BIM");

--Read values from table
Read value from table
Select id from Student;
Select id, name, address from student;
Select * from student;

--where clause
select * from student where id=101;

--Combine condition
--And
	Select * from student where id=101 && faculty="BBA"; 

--Or
	Select * from student where id=101 or faculty="BBA";

--Not 
Select * from student where faculty <> "BBA";


