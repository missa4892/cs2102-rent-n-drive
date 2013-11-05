CREATE TABLE VEHICLES (
  vehicleNo VARCHAR (20) PRIMARY KEY,
  modelType VARCHAR (20) NOT NULL,
  color VARCHAR (20)NOT NULL, 
  price NUMERIC (10) NOT NULL,
  branch VARCHAR (20) CHECK (branch = 'hougang' or branch = 'tampines' or branch = 'woodlands'),
  available NUMBER(1) CHECK (available ='1' or available = '0')
);

ALTER TABLE VEHICLES DROP COLUMN price;

ALTER TABLE VEHICLES ADD (price_weekend NUMERIC(3) NOT NULL);

ALTER TABLE VEHICLES ADD  (price_weekday NUMERIC(3) NOT NULL);

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
  vehicleNo VARCHAR (20) PRIMARY KEY REFERENCES VEHICLES ON DELETE CASCADE
);

CREATE TABLE MOTORCYCLES (
  fuelType VARCHAR (20) CHECK (fuelType = 'petrol'or fuelType = 'gas' or fuelType = 'diesel'),
  gear VARCHAR (20) CHECK (gear = 'auto' or gear = 'manual'),
  sizeType VARCHAR (20) CHECK (sizeType = 'small' or sizeType = 'standard' or sizeType = 'suv' or sizeType = 'special'),
  mileage NUMERIC (10),
  cc VARCHAR (20),
  vehicleNo VARCHAR (20) PRIMARY KEY REFERENCES VEHICLES ON DELETE CASCADE
);

CREATE TABLE BUS (
  busType VARCHAR (20) CHECK (busType = 'bus' or busType = 'minivan'),
  fuelType VARCHAR (20) CHECK (fuelType = 'petrol'or fuelType = 'gas' or fuelType = 'diesel'),
  gear VARCHAR (20) CHECK (gear = 'auto' or gear = 'manual'),
  sizeType NUMERIC (2) CHECK (sizeType = '10' or sizeType = '20' or sizeType = '30' or sizeType = '40'),
  vehicleNo VARCHAR (20) PRIMARY KEY REFERENCES VEHICLES ON DELETE CASCADE
);

CREATE TABLE ACCESSORIES (
  vehicleNo VARCHAR (20),
  accessID NUMERIC (20),
  uname VARCHAR (20),
  qty NUMERIC (1),
  forType NUMERIC (1)CHECK (forType = '1' or forType = '2' or forType = '3' or forType = '4'),
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
