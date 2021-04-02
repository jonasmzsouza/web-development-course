-- 
-- DML - commands
-- 

INSERT INTO tb_course
	(id_course, fl_img_course, nm_course, ds_summary, dt_register, st_active, vl_investment, nr_duration)
VALUES
	(1, 'node_course.jpg', 'Complete NodeJS and MongoDB Developer Course', 'NodeJS Course Summary', '2021-01-01', 1, 159.99, 15),
	(2, 'react_native_course.jpg', 'Multiplatform Android/IOS with React and Redux', 'Summary of the React Native course', '2021-02-01', 1, 204.99, 37),
	(3, 'angular_course.jpg', 'Web development with ES6, TypeScript and Angular', 'Course summary for ES6, TypeScript and Angular', '2021-03-01', 1, 579.99, 31),
	(4, 'complete_web_course.jpg', 'Web Completo 2.0', 'Summary of the Web 2.0 Complete Course', '2021-04-01', 1, 579.99, 59),
	(5, 'linux.jpg ',' Introduction to GNU/Linux ','Summary of the GNU/Linux course', '2021-05-01', 0, 0, 1);
;

INSERT INTO tb_student
	(id_student,nm_student,nr_age,ds_interest,ds_email,nm_state) 
VALUES 
	(1,"Maryam",28,"Informatics","volutpat@parturient.ca","Maine"),
	(2,"Martha",33,"Song","Proin.non@turpis.org","OH"),
	(3,"Meredith",32,"Informatics","quam@viverra.edu","Utah"),
	(4,"Simon",20,"Song","lacus.Nulla.tincidunt@Curabiturut.co.uk","MT"),
	(5,"Maya",23,"Song","tellus@elit.net","AK"),
	(6,"William",22,"Health","vestibulum@faucibus.co.uk","Nebraska"),
	(7,"Barclay",22,"Health","Integer.vitae@nibhDonec.net","Kentucky"),
	(8,"Chantale",34,"Informatics","tellus@Aliquamultrices.org","WA"),
	(9,"Yoko",23,"Song","commodo@tempus.ca","Connecticut"),
	(10,"Zelda",25,"Health","justo.nec@Phasellus.co.uk","OR"),
	(11,"Garth",32,"Song","ipsum.porta@Proinultrices.com","Oregon"),
	(12,"Adena",24,"Health","gravida.non@ultricesVivamusrhoncus.ca","OK"),
	(13,"Shelly",23,"Health","Fusce@lobortisnisinibh.org","Oklahoma"),
	(14,"Trevor",22,"Health","iaculis@sociosquad.org","Oregon"),
	(15,"Natalie",33,"Health","vehicula.et@facilisis.ca","UT"),
	(16,"Ramona",18,"Song","sit.amet@posuere.ca","DE"),
	(17,"Idola",19,"Informatics","diam@lorem.edu","Kansas"),
	(18,"Cody",35,"Song","nisi.dictum.augue@antebibendumullamcorper.co.uk","Washington"),
	(19,"Jade",32,"Health","risus.Donec@augue.co.uk","AL"),
	(20,"Craig",22,"Health","vitae.mauris@scelerisque.edu","CA");	
	
INSERT INTO tb_student
	(id_student,nm_student,nr_age,ds_interest,ds_email,nm_state)
VALUES
	(21,"Dominic",31,"Song","Aliquam.erat@Etiamimperdiet.edu","KS"),
	(22,"Simone",19,"Informatics","lorem.fringilla@nunc.net","OH"),
	(23,"Hammett",29,"Song","magna@risusquisdiam.co.uk","OK"),
	(24,"Sade",19,"Song","ut@aliquamiaculis.org","Arkansas"),
	(25,"Rana",32,"Song","Curae.Phasellus@Quisque.co.uk","Hawaii"),
	(26,"Karyn",28,"Song","sociis.natoque.penatibus@et.ca","KY"),
	(27,"Odysseus",29,"Health","risus.a.ultricies@Phasellusataugue.ca","Colorado"),
	(28,"Quin",21,"Informatics","Donec.est@quamdignissim.org","DE"),
	(29,"Demetrius",30,"Informatics","sit.amet@cubiliaCurae.net","Hawaii"),
	(30,"Stewart",35,"Informatics","volutpat@loremsemper.org","KY"),
	(31,"Eagan",32,"Health","ut.pharetra@sitametconsectetuer.org","VA"),
	(32,"Kareem",35,"Health","pulvinar.arcu@sodales.com","Oklahoma"),
	(33,"Miranda",20,"Health","enim@tortorat.com","Kansas"),
	(34,"Barclay",29,"Health","dui@nequesed.com","Alaska"),
	(35,"Ursa",27,"Informatics","lobortis.tellus.justo@sapienCrasdolor.net","Delaware"),
	(36,"Kellie",27,"Song","Pellentesque.habitant@Integer.ca","MS"),
	(37,"Leonard",18,"Health","Donec@risusaultricies.co.uk","Nebraska"),
	(38,"Caldwell",32,"Health","molestie@Fuscediamnunc.org","Wyoming"),
	(39,"Kasimir",26,"Informatics","aliquam.eros.turpis@purusac.co.uk","AL"),
	(40,"Yeo",32,"Health","In@Proinnislsem.edu","MA");	
	
INSERT INTO tb_student
	(id_student,nm_student,nr_age,ds_interest,ds_email,nm_state)
VALUES
	(41,"Talon",30,"Health","Nunc.commodo@mollis.ca","LA"),
	(42,"Leslie",20,"Health","magna.sed@nonummy.ca","KS"),
	(43,"Christian",24,"Song","eu.turpis.Nulla@Phasellus.ca","Louisiana"),
	(44,"Oren",18,"Song","convallis@tortoratrisus.edu","Missouri"),
	(45,"Tarik",18,"Informatics","Nam.interdum.enim@odioNam.net","ME"),
	(46,"Uta",28,"Song","et.euismod@egestasblandit.net","TN"),
	(47,"Basia",35,"Health","lobortis.tellus@scelerisque.com","Virginia"),
	(48,"Kieran",30,"Informatics","Suspendisse.non.leo@hendreritneque.com","Oregon"),
	(49,"Lucian",30,"Health","pede.et@eu.edu","Colorado"),
	(50,"Jenna",19,"Health","Suspendisse.commodo.tincidunt@pellentesqueegetdictum.net","AL"),
	(51,"Cameron",35,"Song","commodo.hendrerit@pharetra.co.uk","Louisiana"),
	(52,"Kitra",25,"Song","eget.nisi@luctusvulputate.com","Arizona"),
	(53,"Kaseem",18,"Song","imperdiet.ullamcorper@Nuncmaurissapien.co.uk","Wisconsin"),
	(54,"Linda",31,"Informatics","suscipit.est@nullaInteger.co.uk","CO"),
	(55,"Jennifer",35,"Song","parturient@eratvel.net","AL"),
	(56,"Germaine",31,"Informatics","felis@et.net","Tennessee"),
	(57,"Eugenia",33,"Informatics","molestie.arcu@Aliquam.net","Vermont"),
	(58,"Colette",24,"Song","vestibulum.massa@duinecurna.edu","MA"),
	(59,"Honorato",23,"Health","Cras@suscipitnonummyFusce.edu","Indiana"),
	(60,"April",20,"Song","lectus.Cum.sociis@Nullatempor.edu","Mississippi");	
	
INSERT INTO tb_student
	(id_student,nm_student,nr_age,ds_interest,ds_email,nm_state)
VALUES
	(61,"Ira",19,"Song","Suspendisse.sed@sempercursusInteger.net","HI"),
	(62,"Devin",23,"Song","magna@cursuset.ca","Arizona"),
	(63,"Kennedy",35,"Song","Pellentesque.habitant.morbi@dictum.org","UT"),
	(64,"Haley",27,"Informatics","adipiscing.non.luctus@eteuismod.org","Virginia"),
	(65,"Karleigh",25,"Song","sapien.Nunc.pulvinar@vestibulumloremsit.org","GA"),
	(66,"Orlando",24,"Health","risus.Nulla@elementumpurus.net","LA"),
	(67,"Russell",18,"Song","tempus.scelerisque.lorem@musAenean.ca","Georgia"),
	(68,"Mohammad",25,"Song","sodales@molestie.edu","OK"),
	(69,"Wayne",23,"Informatics","egestas.rhoncus.Proin@Quisqueporttitor.edu","CO"),
	(70,"Shannon",30,"Health","Nam@feugiat.co.uk","Illinois"),
	(71,"Naida",23,"Health","mollis.non.cursus@Donec.ca","Arizona"),
	(72,"Blake",19,"Informatics","ipsum.Curabitur.consequat@utmiDuis.ca","OH"),
	(73,"Ivory",32,"Health","Proin.vel.arcu@auctornonfeugiat.ca","Kansas"),
	(74,"Brendan",18,"Song","quam.elementum.at@inceptoshymenaeosMauris.net","Wisconsin"),
	(75,"Clinton",30,"Informatics","penatibus.et.magnis@auctorMauris.edu","GA"),
	(76,"Erich",35,"Health","non@Fuscefermentum.ca","CT"),
	(77,"Ayanna",29,"Health","non@orciin.net","Missouri"),
	(78,"Jennifer",18,"Health","commodo.tincidunt.nibh@rutrum.org","Vermont"),
	(79,"Peter",33,"Health","Vestibulum.ut@nostraper.com","OK"),
	(80,"Theodore",22,"Informatics","Nam.interdum@loremtristique.net","Minnesota");
	
INSERT INTO tb_student
	(id_student,nm_student,nr_age,ds_interest,ds_email,nm_state)
VALUES
	(81,"Malcolm",22,"Health","Praesent@in.org","MO"),
	(82,"Tatum",28,"Informatics","enim@urnaNullam.com","UT"),
	(83,"Clare",20,"Health","Donec.tempor@scelerisqueloremipsum.org","DE"),
	(84,"Arthur",23,"Song","tempus.lorem@fringillaestMauris.net","Pennsylvania"),
	(85,"Allegra",18,"Song","Pellentesque@arcu.ca","WA"),
	(86,"Rajah",35,"Informatics","dolor.Fusce.feugiat@Sed.edu","Virginia"),
	(87,"Jana",18,"Song","eget@Cum.net","NE"),
	(88,"Alec",35,"Song","tempor.arcu@sagittisDuisgravida.ca","Arkansas"),
	(89,"Charity",33,"Health","ac.feugiat.non@magna.co.uk","Virginia"),
	(90,"Josiah",20,"Health","parturient.montes.nascetur@necluctusfelis.edu","Arkansas"),
	(91,"Amir",18,"Health","sem.consequat@Sed.co.uk","TX"),
	(92,"Hoyt",19,"Song","arcu@netus.ca","WI"),
	(93,"Perry",24,"Health","amet.ultricies@tempor.edu","Massachusetts"),
	(94,"Cairo",30,"Song","et@purusac.org","Kansas"),
	(95,"Timothy",30,"Song","placerat.orci@ut.ca","Maryland"),
	(96,"Xenos",22,"Song","aliquet.diam.Sed@Duis.net","Florida"),
	(97,"Quinlan",27,"Informatics","leo.Cras@Etiamvestibulum.net","Oklahoma"),
	(98,"Nissim",20,"Health","ante.Nunc@lacusAliquamrutrum.com","OK"),
	(99,"Jared",23,"Health","felis@estmollis.edu","Utah"),
	(100,"Armand",29,"Health","Nulla@egetlaoreet.ca","Arizona");