create table organization (orgID varchar(6) not null primary key, orgName varchar (100) not null, orgAddress1 varchar (100) not null, orgAddress2 varchar (100), orgCity varchar(20) not null, state varchar(20) not null, zip varchar(20) not null);


create table orgrep (username varchar(30) not null unique, password varchar(30) not null, fullName varchar(50) not null, mobileNo varchar(15) not null primary key, jobTitle varchar(30) not null, orgID varchar(6) not null, orgName varchar (100) not null, admin int(1), foreign key (orgID) references organization (orgID));


create table applicant (orgName varchar(100) not null, fullName varchar(50) not null, idNo varchar(20) primary key not null, householdIncome decimal (9,2) not null, address1 varchar(50) not null, address2 varchar(50), city varchar(20) not null, state varchar(20) not null, zip varchar(20) not null, orgID varchar(6) not null, username varchar(30) not null unique, password varchar(30) not null, foreign key (orgID) references organization (orgID));


create table document (documentID varchar(6) not null primary key, filename varchar(20) not null, description varchar(100) not null, idNo varchar(20) not null, foreign key (idNo) references applicant (idNo));


create table appeal (appealID varchar(6) not null primary key, orgID varchar(6) not null, orgName varchar (100) not null, title varchar(50) not null, fromDate date not null, toDate date not null, description varchar(100) not null, outcome varchar(20) not null, foreign key (orgID) references organization (orgID));


create table contribution (contributionID varchar(6) not null primary key, appealID varchar(6) not null, goodsType varchar(10), otherGoodsType varchar(10), quantity integer(10), goodsDescription varchar(50), estimatedValue decimal(9,2), paymentChannel varchar(20), cashAmount decimal(9,2), bankName varchar(50), bankNo varchar(20), refNo varchar(20), cardName varchar(50), cardNo varchar(20), expDate varchar(5), cvv varchar(3), receivedDate date not null, foreign key (appealID) references appeal(appealID));


create table disbursement (appealID varchar(6) not null, idNo varchar(20) not null, disbursementDate date not null, cashAmount decimal(9,2) not null, goodsType varchar(20) not null, otherGoodsType varchar(20), quantity integer(10) not null, goodsDescription varchar(50), address1 varchar(100) not null, address2 varchar(100), primary key (appealID, idNo), foreign key (appealID) references appeal(appealID), foreign key (idNo) references applicant(idNo));
