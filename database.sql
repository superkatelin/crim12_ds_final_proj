Create Table client
(clientId Varchar(10) Not Null Primary Key, 
clientName Varchar(50),
clientDescription Text,
gicsSector Varchar(25),
gicsSubIndustry Varchar(50),
headquarters Varchar(50)
);

Create Table sensor
(sensorId Varchar(10) Not Null Primary Key,
 sensorName Varchar(15),
 sensorDescription Text,
 manufacturer Varchar(50),
 totalLifeExpectancyHours Integer
);


Create Table turbine
(turbineId Varchar(10) Not Null Primary Key,
 turbineName Varchar(15),
 turbineDescription Text,
 capacity integer,
 rampUpTime integer,
 maintenanceInterval integer
);

Create Table site
(siteId varchar(10) not null primary key,
 clientId varchar(10) not null,
 siteName varchar(50),
 siteDescription text,
 primaryContact varchar(20),
 capacity integer,
 commercialDate date,
 addrLine1 varchar(60),
 addrLine2 varchar(60),
 addrCity varchar(30),
 addrState varchar(2),
 addrZip varchar(5),
 addrCountry varchar(30),
 foreign key site_FK(clientId) references client(clientId)
);

Create Table turbineDeployed
(turbineDeployedId varchar(10) not null primary key,
 turbineId varchar(10) not null,
 siteId varchar(10) not null,
 serialNumber varchar(40),
 deployedDate Date,
 totalFiredHours integer,
 totalStarts integer,
 lastPlannedOutageDate date,
 lastUnplannedOutageDate date,
 Foreign Key TD_FK1(turbineId) References turbine(turbineId),
 Foreign Key TD_FK2(siteId) References site(siteId)
);

Create Table sensorDeployed
(sensorDeployedId varchar(10) not null primary key,
 sensorId varchar(10) not null,
 turbineDeployedId varchar(10) not null,
 serialNumber varchar(40),
 deployedDate date,
 Foreign Key SD_FK1(sensorId) references sensor(sensorId),
 foreign key SD_FK2(turbineDeployedId) references turbineDeployed(turbineDeployedId)
);

Create Table sensorTimeSeries
(sensorDeployedId varchar(10) not null,
 dataCollectedDate date not null,
 output double,
 heatRate double,
 compressorEfficiency double,
 availability double,
 reliability double,
 firedHours double,
 trips integer,
 starts integer,
 primary key(sensorDeployedId, dataCollectedDate),
 foreign key STS_FK(sensorDeployedId) references sensorDeployed(sensorDeployedID)
);

2
3
4
5
6
7
8
9
10
11
	
SELECT 
    *
FROM
    sensorTimeSeries
INTO OUTFILE 'C:\Users\katma\Downloads\data\data\sts.csv' 
FIELDS ENCLOSED BY '"' 
TERMINATED BY ';' 
ESCAPED BY '"' 
LINES TERMINATED BY '\r\n';