select 
    co.id, 
    co.title course_title, 
    ca.title category_title 
from 
    courses co 
    inner join categories ca on co.category_id = ca.id 
where 
    co.id = :id
