-- aktualizacja 1 testowego wiersza
UPDATE movies SET `name` = "Wieczny student", 
`cat_id` = "2", 
`actors` = "Ryan Reynolds, Tara Reid, Kal Penn", 
`desc` = "Historia Vana Wildera, idola i beniaminka uniwersyteckiego kampusu. Zajmuje go już od siedmiu upojnych lat. Jednak nie jest to efekt porażki naukowej lecz wypracowanego planu. To co go interesuje to sława organizatora najlepszych imprez na wielką skalę. Kiedy tata zaczyna nie pochwalać jego poczynań i likwiduje dostęp do konta, Van chce zorganizować gigantyczną imprezę, na której zbierze środki na dalszą naukę. Zatrudnia nawet asystenta do pomocy. Jednak plany pokrzyżują mu zapiekli wrogowie: profesor McDoogle, kolega, któremu Van zajmuje stale miejsce parkingowe i szkolny prymus. A do tego właśnie poderwał piękną Gwen, w której potajemnie kocha się prymus." WHERE id = "1";

-- aktualizacja 2 testowego wiersza
UPDATE movies SET `name` = "Wieczny student 2", 
`cat_id` = "2", 
`actors` = "Kal Penn, Lauren Cohan, Daniel Percival", 
`desc` = "Sequel komedii z 2002 roku. Tym razem historia skupia się na studencie Taj Mahal Badalandabad, znanym z pierwszej cześci. Taj (Kal Penn) wyjeżdża do Anglii na prestiżowy uniwersytet Oxford, aby kontynuować naukę, ale tak naprawdę chce pokazać miejscowym studentom jak spędzać czas, na zabawie i imprezach." WHERE id = "2";

-- dogrywanie nowych filmów
INSERT INTO movies (`name`, `cat_id`, `actors`, `slug`, `desc`) VALUES
('Wieczny student 3', 2, 'Jonathan Bennett, Kristin Cavallari, Jerry Shea', '', 'Van Wilder idzie śladami swojego ojca i rozpoczyna pierwszy rok studiów na Coolidge College. Gdy tam dociera, okazuje się, że uczelnia nie jest już kolebką imprez, tylko szkołą wojskową, prowadzoną przez dziekana Deana Reardona. Dziekan, który żywi nienawiść do Wildera Seniora, robi wszystko, aby uprzykrzyć życie jego synowi. Z kolei Van postanawia wziąć sprawy w swoje ręce - uwolnić Coolidge College z rąk jego oprawcy i przywrócić uczelni dawną świetność.'),
('Cienka czerwona linia', 1, 'Sean Penn, Adrien Brody, George Clooney', '', 'Ekranizacja powieści Jamesa Jonesa. Rok 1942. Oddział amerykańskiej armii ląduje na okupowanej przez Japończyków wyspie Guadalcanal. Ich zadanie okazuje się misją samobójczą.'),
('Helikopter w ogniu', 1, 'Josh Hartnett, Ewan McGregor, Tom Sizemore', '', 'Oparty na faktach film opowiada o nieudanej akcji amerykańskiego oddziału 120 Delta, który miał za zadanie porwać dwóch poruczników zbuntowanych wojsk Somalii.'),
('Bękarty wojny', 1, 'Brad Pitt, Mélanie Laurent, Christoph Waltz', '', 'W okupowanej przez nazistów Francji oddział złożony z Amerykanów żydowskiego pochodzenia planuje zamach na Hitlera.'),
('Requiem dla snu', 3, 'Ellen Burstyn, Jared Leto, Jennifer Connelly', '', 'Historia czwórki bohaterów, dla których używki są ucieczką przed otaczającą ich rzeczywistością.'),
('Skazani na Shawshank', 3, 'Tim Robbins, Morgan Freeman, Bob Gunton', '', 'Adaptacja opowiadania Stephena Kinga. Historia niesłusznie skazanego na dożywocie bankiera, który musi przeżyć w brutalnym świecie rządzonym przez strażników i współwięźniów.'),
('Zielona mila', 3, 'Tom Hanks, David Morse, Bonnie Hunt', '', 'Emerytowany strażnik więzienny opowiada przyjaciółce o niezwykłym mężczyźnie, którego skazano na śmierć za zabójstwo dwóch 9-letnich dziewczynek.'),
('Lśnienie', 4, 'Jack Nicholson, Shelley Duvall, Danny Lloyd', '', 'Jack pracuje jako kurator w hotelu Overlook. Hotel jest zamknięty na zimę i mężczyzna z rodziną są jedynymi mieszkańcami budynku, który okazuje się nawiedzony.'),
('Martwe zło', 4, 'Bruce Campbell, Ellen Sandweiss, Richard DeManincor', '', 'Grupa znajomych przyjeżdża w góry do opuszczonego domku. W nocy wczasowicze nieświadomie przywołują złe demony.'),
('Jestem legendą', 4, 'Will Smith, Alice Braga, Salli Richardson-Whitfield', '', 'Tajemniczy wirus wymordował lub zamienił w krwiożercze bestie prawie całą ludzkość. Samotny naukowiec Robert Neville poszukuje szczepionki, by odwrócić mutację.'),
('2001: Odyseja kosmiczna', 5, 'Keir Dullea, Gary Lockwood, William Sylvester', '', 'test'),
('Seksmisja', 5, 'Jerzy Stuhr, Olgierd Łukaszewicz, Bożena Stryjkówna', '', 'Rok 2044, zostają odhibernowani dwaj ostatni przedstawiciele płci męskiej. Władza jest w rękach Ligi Kobiet, która nie zamierza z niej zrezygnować.'),
('Incepcja', 5, 'Leonardo DiCaprio, Joseph Gordon-Levitt, Ellen Page', '', 'Czasy, gdy technologia pozwala na wchodzenie w świat snów. Złodziej Cobb ma za zadanie wszczepić myśl do śpiącego umysłu.');
