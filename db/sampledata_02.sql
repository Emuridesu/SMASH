drop table if exists categories;
create table categories(
  id integer primary key,
  title text
);

insert into categories (id, title) values (1, 'Programming');
insert into categories (id, title) values (2, 'Design');
insert into categories (id, title) values (3, 'Marketing');

drop table if exists courses;
create table courses(
  id integer primary key,
  title text,
  learning_time integer,
  category_id integer
);

insert into courses (id, title, learning_time, category_id) values (1, 'PHP Basic', 30, 1);
insert into courses (id, title, learning_time, category_id) values (2, 'PHP Database', 50, 1);
insert into courses (id, title, learning_time, category_id) values (3, 'Python Basic', 40,  1);
insert into courses (id, title, learning_time, category_id) values (4, 'Web Design', 50, 2);

drop table if exists sections;
create table sections(
  id integer primary key,
  title text,
  no integer,
  url text,
  course_id integer
);

insert into sections (id, title, no, url, course_id) values (1, 'Variance', 1, 'https://d2rl9vvq6hawml.cloudfront.net/phpdb/php-basic-1.mp4', 1);
insert into sections (id, title, no, url, course_id) values (2, 'Array', 2, 'https://d2rl9vvq6hawml.cloudfront.net/phpdb/php-basic-2.mp4', 1);
insert into sections (id, title, no, url, course_id) values (3, 'Loop', 3, 'https://d2rl9vvq6hawml.cloudfront.net/phpdb/php-basic-3.mp4', 1);
insert into sections (id, title, no, url, course_id) values (4, 'Condition', 4, 'https://d2rl9vvq6hawml.cloudfront.net/phpdb/php-basic-4.mp4', 1);
insert into sections (id, title, no, url, course_id) values (5, 'Function', 5, 'https://d2rl9vvq6hawml.cloudfront.net/phpdb/php-basic-5.mp4', 1);
insert into sections (id, title, no, url, course_id) values (6, 'Database', 1, 'https://d2rl9vvq6hawml.cloudfront.net/phpdb/php-db-1.mp4', 2);
insert into sections (id, title, no, url, course_id) values (7, 'Variance', 1, 'https://d2rl9vvq6hawml.cloudfront.net/phpdb/python-basic-1.mp4', 3);
insert into sections (id, title, no, url, course_id) values (8, 'HTML', 1, 'https://d2rl9vvq6hawml.cloudfront.net/phpdb/web-design-1.mp4', 4);
