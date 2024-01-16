select 
    se.id, 
    se.title, 
    se.no, 
    se.url, 
    se.course_id
from 
    sections se
where 
    se.course_id = :course_id
order by 
    se.no
