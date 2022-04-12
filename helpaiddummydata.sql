INSERT INTO `organization` (`orgID`, `orgName`, `orgAddress1`, `orgAddress2`, `orgCity`, `state`, `zip`) VALUES
('-', '-', '-', '', '-', '-', '-'),
('ORG001', 'Womens aid org', '265 Jalan Desa Utam', '265', 'Kuala Lumpur', 'Kuala Lumpur', '58100'),
('ORG002', 'Kementerian Kesihatan Malaysia', 'Menara  WOW', '', 'Petaling Jaya', 'Selangor', '46100'),
('ORG003', 'Shelter Home', 'Jalan Shelter', '', 'Kuantan', 'Pahang', '56522'),
('ORG004', 'Yayasan TAR', 'Jalan Saw Ah Choy', '', 'Taiping', 'Perak', '56000');


INSERT INTO `orgrep` (`username`, `password`, `fullName`, `mobileNo`, `jobTitle`, `orgID`, `orgName`, `admin`) VALUES
('jenna.wong', 'Welcome123', 'Jenna Leanne Wong', '0122503496', 'campaign head', 'ORG002', 'Kementerian Kesihatan Malaysia', 0),
('anthony.bridgerton', 'Welcome123', 'Anthony Bridgerton', '0167892364', 'Event Manager', 'ORG003', 'Shelter Home', 0),
('kate.sharma', 'Welcome123', 'Kathani Sharma', '0168956871', 'Appeal Manager', 'ORG001', 'Womens aid org', 0),
('yuki.konggg', 'Welcome123', 'Yuki Kong', '0177895645', 'Admin', '-', '-', 1),
('penelope.fang', 'Welcome123', 'Penelope Fang', '0365987459', 'Appeal Executive', 'ORG004', 'Yayasan TAR', 0),
('zalaan', 'admin', 'Zalaan', '0105647652', 'Admin', '-', '-', 1);


INSERT INTO `applicant` (`orgName`, `fullName`, `idNo`, `householdIncome`, `address1`, `address2`, `city`, `state`, `zip`, `orgID`, `username`, `password`) VALUES
('Womens aid org', 'Veronica Lee', '01685595212684', '900.00', 'Jalan Tan Chong', 'Taman Tasik', 'Kuantan', 'Pahang', '56412', 'ORG001', 'U006', 'Welcome123'),
('', 'Violet Bridgerton', '01689956423', '800.00', 'Bridgerton Lane', 'Jalan KL', 'Kuala Lumpur', 'Kuala Lumpur', '58100', 'ORG001', 'U007', 'Welcome123'),
('Shelter Home', 'Brendan Tan', '123', '1200.00', '265 Jalan Desa Utam', '265', 'Kuala Lumpur', 'Kuala Lumpur', '58100', 'ORG003', 'U003', 'Welcome123'),
('', 'Erin Lee', '41564546', '1200.00', 'Menara  WOW', '123', 'Petaling Jaya', 'Selangor', '46100', 'ORG002', 'U004', 'Welcome123'),
('', 'Nur Aisha', '456123', '560.00', 'Menara Bakti', 'Jalan 14/6', 'Teluk Intan', 'Perak', '78900', 'ORG001', 'U008', 'Welcome123'),
('', 'Michael Tan', '561459156', '1500.00', 'JALAN 14/1 SEKSYEN 14 46100', '', 'PETALING JAYA', 'Selangor', '46100', 'ORG002', 'U001', 'Welcome123'),
('', 'Kong Ying Ying', '923232', '1200.00', 'Menara millenium SEKSYEN 14', 'PETALING JAYA', 'PETALINGJAYA', 'Selangor', '46100', 'ORG002', 'U005', 'Welcome123'),
('', 'John Tan', '9894654564', '1300.00', '265 Jalan Desa Utama  Taman Desa  58100 Kuala Lump', '265', 'Kuala Lumpur', 'Kuala Lumpur', '58100', 'ORG002', 'U002', 'Welcome123');


INSERT INTO `document` (`documentID`, `filename`, `description`, `idNo`) VALUES
('D001', 'Income Cert', 'HR cert for income', '123'),
('D002', 'Veronica Income', 'pay slip for veronica', '01685595212684');


INSERT INTO `appeal` (`appealID`, `orgID`, `orgName`, `title`, `fromDate`, `toDate`, `description`, `outcome`) VALUES
('A00001', 'ORG002', 'Kementerian Kesihatan Malaysia', 'help the nurses', '2022-04-10', '2022-04-29', 'PPE, oxygen tanks, n95 mask', 'Completed'),
('A00002', 'ORG001', 'Womens aid org', 'Sanitary products needed', '2022-03-31', '2022-04-08', 'Sanitary products and women apparel needed', 'Completed'),
('A00003', 'ORG003', 'Shelter Home', 'Students in need', '2022-04-13', '2022-04-21', 'Books, stationery, school uniforms needed', 'Partially Disbursed'),
('A00004', 'ORG001', 'Womens aid org', 'Childcare products needed for new babies', '2022-04-12', '2022-04-30', 'Milk powder, breast pump, diapers', 'Completed');


INSERT INTO `contribution` (`contributionID`, `appealID`, `goodsType`, `otherGoodsType`, `quantity`, `goodsDescription`, `estimatedValue`, `paymentChannel`, `cashAmount`, `bankName`, `bankNo`, `refNo`, `cardName`, `cardNo`, `expDate`, `cvv`, `receivedDate`) VALUES
('C00001', 'A00001', NULL, NULL, NULL, NULL, NULL, 'bank', '120.00', 'Brendan Tan', '456', '123', NULL, NULL, NULL, NULL, '2022-04-12'),
('C00002', 'A00003', NULL, NULL, NULL, NULL, NULL, 'credit', '500.00', NULL, NULL, NULL, 'Ng Ai Sim', '456123', '05/23', '333', '2022-04-12'),
('C00003', 'A00003', NULL, NULL, NULL, NULL, NULL, 'bank', '120.00', 'Landon Wong', '4756123', '123', NULL, NULL, NULL, NULL, '2022-04-12'),
('C00004', 'A00003', 'Other', 'Books', 500, '500 textbooks', '1000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-12'),
('C00005', 'A00003', 'Other', 'School uni', 60, '60 sets of uniform for secondary school', '1500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-12'),
('C00006', 'A00004', 'Other', 'Breast pum', 2, '2 PHILIPS breast pumps', '1500.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-12');


INSERT INTO `disbursement` (`appealID`, `idNo`, `disbursementDate`, `cashAmount`, `goodsType`, `otherGoodsType`, `quantity`, `goodsDescription`, `address1`, `address2`) VALUES
('A00001', '41564546', '2022-04-13', '120.00', 'Food', '', 1, '1 bag of rice', 'Jalan Abu Bakar', ''),
('A00001', '9894654564', '2022-04-15', '130.00', 'Toiletries', '', 10, '10 packs of toilet paper', 'Jalan Ah Lor', ''),
('A00003', '123', '2022-04-15', '120.00', 'Stationery', '', 6, 'textbooks for form 5', 'Bridgerton Lane', ''),
('A00004', '01689956423', '2022-04-28', '1500.00', 'Other', 'breast pump', 1, 'breast pump', 'Jalan Wong', '');