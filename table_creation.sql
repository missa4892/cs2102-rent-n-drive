CREATE TABLE VEHICLES (
  vehicleNo VARCHAR (20) PRIMARY KEY,
  modelType VARCHAR (20),
  color VARCHAR (20), 
  price NUMERIC (10),
  branch VARCHAR (20) CHECK (branch = 'hougang' or branch = 'tampines' or branch = 'woodlands'),
  available NUMBER(1) CHECK (available ='1' or available = '0')
);

CREATE TABLE USERS (
  uname VARCHAR (50) NOT NULL, 
  emailAdd VARCHAR (20) NOT NULL, 
  address VARCHAR (255) NOT NULL, 
  mobile VARCHAR (10) NOT NULL, 
  license VARCHAR (16) PRIMARY KEY,
  creditcardNo VARCHAR (20)
);

CREATE TABLE RENTS (
  rentDate TIMESTAMP,
  returnDate TIMESTAMP,
  status VARCHAR (20)CHECK (status = 'paid' or status = 'collected' or status = 'overdue'),
  bookedDate TIMESTAMP,
  rentID VARCHAR (16),
  vehicleNo VARCHAR (20),
  PRIMARY KEY (rentID),
  FOREIGN KEY (vehicleNo) REFERENCES VEHICLES (vehicleNo),
  FOREIGN KEY (rentID) REFERENCES USERS (license)
);

CREATE TABLE CARS (
  fuelType VARCHAR (20) CHECK (fuelType = 'petrol'or fuelType = 'gas' or fuelType = 'diesel'),
  gear VARCHAR (20) CHECK (gear = 'auto' or gear = 'manual'),
  sizeType VARCHAR (20) CHECK (sizeType = 'small' or sizeType = 'standard' or sizeType = 'suv' or sizeType = 'special'),
  mileage NUMERIC (10),
  cc VARCHAR (20),
  vehicleNo VARCHAR (20) PRIMARY KEY REFERENCES VEHICLES
);

CREATE TABLE MINIBUS (
  fuelType VARCHAR (20) CHECK (fuelType = 'petrol'or fuelType = 'gas' or fuelType = 'diesel'),
  gear VARCHAR (20) CHECK (gear = 'auto' or gear = 'manual'),
  sizeType VARCHAR (20) CHECK (sizeType = 'small' or sizeType = 'standard' or sizeType = 'suv' or sizeType = 'special'),
  mileage NUMERIC (10),
  cc VARCHAR (20),
  vehicleNo VARCHAR (20) PRIMARY KEY REFERENCES VEHICLES
);

CREATE TABLE MOTORCYCLES (
  fuelType VARCHAR (20) CHECK (fuelType = 'petrol'or fuelType = 'gas' or fuelType = 'diesel'),
  gear VARCHAR (20) CHECK (gear = 'auto' or gear = 'manual'),
  sizeType VARCHAR (20) CHECK (sizeType = 'small' or sizeType = 'standard' or sizeType = 'suv' or sizeType = 'special'),
  mileage NUMERIC (10),
  cc VARCHAR (20),
  vehicleNo VARCHAR (20) PRIMARY KEY REFERENCES VEHICLES
);

CREATE TABLE BUS (
  fuelType VARCHAR (20) CHECK (fuelType = 'petrol'or fuelType = 'gas' or fuelType = 'diesel'),
  gear VARCHAR (20) CHECK (gear = 'auto' or gear = 'manual'),
  sizeType VARCHAR (20) CHECK (sizeType = 'small' or sizeType = 'standard' or sizeType = 'suv' or sizeType = 'special'),
  mileage NUMERIC (10),
  cc VARCHAR (20), 
  vehicleNo VARCHAR (20) PRIMARY KEY REFERENCES VEHICLES
);

CREATE TABLE ACCESSORIES (
  vehicleNo VARCHAR (20),
  accessID VARCHAR (20),
  uname VARCHAR (20),
  qty NUMERIC (1),
  forType NUMERIC (1)CHECK (accessID = '1' or accessID = '2' or accessID = '3' or accessID = '4'),
    PRIMARY KEY(vehicleNo, accessID),
  FOREIGN KEY (vehicleNo) REFERENCES VEHICLES (vehicleNo)
);

CREATE TABLE BRANCH (
  vehicleNo VARCHAR (20),
  branchID VARCHAR (20),
  address VARCHAR (50),
  PRIMARY KEY(vehicleNo, branchID),
  FOREIGN KEY (vehicleNo) REFERENCES VEHICLES (vehicleNo)
);