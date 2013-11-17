SELECT * FROM C.CARS, R.RENTS, V.VEHICLES WHERE (C.vehicleNo = V.vehicleNo AND R.vehicleNo = V.vehicleNo) AND 
(V.color = 'Blue' AND ((TO_CHAR(R.rentDate, 'DD-MM-YYYY') < '20-11-2013' AND (TO_CHAR(R.returnDate, 'DD-MM-YYYY') < '23-11-2013') OR ((TO_CHAR(R.rentDate, 'DD-MM-YYYY') > '20-11-2013' AND
(TO_CHAR(R.returnDate, 'DD-MM-YYYY') > '23-11-2013')));