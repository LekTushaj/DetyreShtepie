USE fakulteti;



 -- Q1:   Shfaq te gjitha kolonat e tabelës studentët;

SELECT *
FROM studentet



 -- Q3: Shfaq profesoret qe kanë rrogën më të madhe se 900 €.

SELECT *
FROM profesoret
WHERE Paga > 900

-- Q4: Shfaq profesorin që ka numrin e id-së 4.

SELECT *
FROM profesoret
WHERE id_profesoreve = 4
 
-- Q5:   INNER JOIN – Shfaq listën e studentëve që kanë paraqitur provimet për afatin e parë

SELECT      studentet.nr_indexit, studentet.Emri, studentet.Mbiemri,
			paraqitja_provimeve.id_provimeve,  paraqitja_provimeve.emri_lendes,
			paraqitja_provimeve.data_provimit
FROM studentet
INNER JOIN paraqitja_provimeve
ON studentet.nr_indexit = paraqitja_provimeve.nr_indexit

-- Q6:   INNER JOIN – Shfaq listën e studentëve që kanë paraqitur provimin për lëndën – Marketing

SELECT      studentet.nr_indexit, studentet.Emri, studentet.Mbiemri,
			paraqitja_provimeve.id_provimeve,  paraqitja_provimeve.emri_lendes,
			paraqitja_provimeve.data_provimit
FROM studentet
INNER JOIN paraqitja_provimeve
ON studentet.nr_indexit = paraqitja_provimeve.nr_indexit
WHERE paraqitja_provimeve.emri_lendes = 'Marketing'




-- Q7:   OUTER JOIN – Shfaq listen e të gjithë studenteve të semestrit 1 (edhe ata që nuk kanë paraqitur Provime).

SELECT      studentet.nr_indexit, studentet.Emri, studentet.Mbiemri,
			paraqitja_provimeve.id_provimeve,  paraqitja_provimeve.emri_lendes,
			paraqitja_provimeve.data_provimit
FROM studentet
LEFT JOIN paraqitja_provimeve
ON studentet.nr_indexit = paraqitja_provimeve.nr_indexit





















