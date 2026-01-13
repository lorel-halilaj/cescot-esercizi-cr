SELECT DISTINCT cl.nome, cl.cognome
FROM clienti cl
JOIN citta c ON c.id_citta = cl.citta
JOIN prenotazioni p ON p.cliente = cl.id_cliente
WHERE c.citta IN ('Bologna', 'Roma', 'Milano')
AND p.tipo_struttura IN ('3 stelle', '4 stelle');

SELECT c.citta, COUNT(*) AS totale_pren_3_4_stelle
FROM clienti cl
JOIN citta c ON c.id_citta = cl.citta
JOIN prenotazioni p ON p.cliente = cl.id_cliente
WHERE c.citta IN ('Bologna', 'Roma', 'Milano')
AND p.tipo_struttura IN ('3 stelle', '4 stelle')
GROUP BY c.citta;