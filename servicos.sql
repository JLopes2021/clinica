-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/06/2023 às 19:04
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `clinica`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(25) NOT NULL,
  `tratamento_facial` varchar(2500) NOT NULL,
  `tratamento_corporal` varchar(2500) NOT NULL,
  `estetica_capilar` varchar(2500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `embelezamento` varchar(2500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `terapias_relaxantes` varchar(2500) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `valor` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `servicos`
--

INSERT INTO `servicos` (`id`, `tratamento_facial`, `tratamento_corporal`, `estetica_capilar`, `embelezamento`, `terapias_relaxantes`, `descricao`, `valor`) VALUES
(2, 'Tratamento Facial', '', '', '', '', 'A limpeza de pele é um tratamento facial que visa remover impurezas, como cravos e células mortas, proporcionando uma pele mais limpa e saudável.', 0),
(3, 'Limpeza de Pele Profunda', '', '', '', '', 'A limpeza de pele profunda é um tratamento que remove impurezas, como cravos e células mortas, proporcionando uma pele mais limpa e saudável.', 80),
(4, 'Peeling Químico', '', '', '', '', 'O peeling químico é um procedimento que utiliza substâncias químicas para esfoliar a pele, promovendo a renovação celular e melhorando a textura e o tom da pele.', 120),
(5, 'Microdermoabrasão', '', '', '', '', 'A microdermoabrasão é um tratamento não invasivo que utiliza microcristais para esfoliar suavemente a camada mais superficial da pele, reduzindo rugas finas, manchas e poros dilatados.', 150),
(6, 'Radiofrequência Facial', '', '', '', '', 'A radiofrequência facial é um tratamento que utiliza energia de radiofrequência para estimular a produção de colágeno, melhorar a elasticidade da pele e reduzir rugas e flacidez.', 200),
(7, 'Fotorejuvenescimento', '', '', '', '', 'O fotorejuvenescimento é um procedimento que utiliza luz intensa pulsada (LIP) para tratar manchas, vasinhos, rugas finas e estimular a produção de colágeno na pele.', 180),
(8, 'Preenchimento Facial', '', '', '', '', 'O preenchimento facial é um procedimento estético que utiliza substâncias injetáveis para preencher rugas, sulcos e volumizar áreas do rosto, proporcionando um aspecto mais jovem e revitalizado.', 250),
(9, 'Toxina Botulínica (Botox)', '', '', '', '', 'A toxina botulínica, comumente conhecida como Botox, é um tratamento que consiste na aplicação de injeções para relaxar os músculos faciais e suavizar rugas de expressão.', 300),
(10, 'Tratamento de Acne e Manchas', '', '', '', '', 'O tratamento de acne e manchas visa reduzir a acne, clarear manchas e uniformizar a pele, utilizando técnicas como limpeza de pele, peelings e produtos específicos.', 120),
(11, '', 'Drenagem Linfática', '', '', '', 'A drenagem linfática é uma técnica de massagem que estimula o sistema linfático, ajudando na eliminação de toxinas, redução da retenção de líquidos e melhoria da circulação.', 100),
(12, '', 'Massagem Relaxante', '', '', '', 'A massagem relaxante é uma técnica que utiliza movimentos suaves e rítmicos para aliviar tensões musculares, promover o relaxamento e o bem-estar geral.', 80),
(13, '', 'Tratamento para Redução de Medidas', '', '', '', 'O tratamento para redução de medidas é um conjunto de técnicas e procedimentos que visam diminuir o acúmulo de gordura localizada, modelar o corpo e melhorar a aparência estética.', 150),
(14, '', 'Tratamento para Celulite', '', '', '', 'O tratamento para celulite consiste em técnicas que visam reduzir a aparência da celulite, promovendo a melhoria da textura da pele e a diminuição dos nódulos de gordura.', 120),
(15, '', 'Esfoliação Corporal', '', '', '', 'A esfoliação corporal é um procedimento que remove as células mortas da pele, promovendo a renovação celular e deixando a pele mais macia, suave e luminosa.', 60),
(16, '', 'Envoltório Corporal', '', '', '', 'O envoltório corporal é um tratamento que utiliza produtos específicos aplicados na pele para hidratar, nutrir e revitalizar o corpo, promovendo uma sensação de relaxamento e bem-estar.', 100),
(17, '', 'Tratamento para Flacidez', '', '', '', 'O tratamento para flacidez é um conjunto de técnicas que visam fortalecer e tonificar os tecidos corporais, melhorando a firmeza e a elasticidade da pele.', 200),
(18, '', 'Criolipólise', '', '', '', 'A criolipólise é um procedimento que utiliza o resfriamento controlado para destruir as células de gordura, resultando na redução de medidas e no contorno corporal.', 350),
(19, '', '', 'Hidratação Capilar', '', '', 'A hidratação capilar é um tratamento que repõe a umidade natural dos fios, deixando-os mais macios, sedosos e saudáveis.', 60),
(20, '', '', 'Cauterização Capilar', '', '', 'A cauterização capilar é um procedimento que reconstrói os fios danificados, promovendo a reconstrução da fibra capilar, reduzindo a quebra e melhorando a elasticidade dos cabelos.', 120),
(21, '', '', 'Coloração e Tintura', '', '', 'A coloração e tintura são procedimentos estéticos para mudar a cor dos cabelos, proporcionando um novo visual e cobrindo cabelos brancos.', 80),
(22, '', '', 'Tratamento para Queda de Cabelo', '', '', 'O tratamento para queda de cabelo é um conjunto de técnicas que visam fortalecer os fios, estimular o crescimento capilar e reduzir a queda excessiva dos cabelos.', 150),
(23, '', '', 'Escova Progressiva', '', '', 'A escova progressiva é um tratamento que alisa temporariamente os fios, reduzindo o volume e o frizz, proporcionando um cabelo liso e mais fácil de pentear.', 200),
(24, '', '', 'Tratamento para Couro Cabeludo Sensível', '', '', 'O tratamento para couro cabeludo sensível é indicado para aliviar a coceira, a irritação e a descamação do couro cabeludo, proporcionando conforto e saúde.', 100),
(25, '', '', 'Tratamento Anticaspa', '', '', 'O tratamento anticaspa é indicado para reduzir a descamação e a coceira do couro cabeludo, melhorando a saúde capilar e eliminando a presença de caspa.', 80),
(26, '', '', 'Tratamento para Cabelos Danificados', '', '', 'O tratamento para cabelos danificados é um conjunto de técnicas que visam reparar os fios danificados, devolvendo a saúde, o brilho e a vitalidade aos cabelos.', 120),
(27, '', '', '', 'Depilação', '', 'A depilação é um procedimento estético que remove os pelos indesejados do corpo, proporcionando uma pele lisa e suave.', 50),
(28, '', '', '', 'Bronzeamento Artificial', '', 'O bronzeamento artificial é um procedimento que utiliza produtos específicos para dar cor à pele, simulando o efeito do bronzeado.', 80),
(29, '', '', '', 'Design de Sobrancelhas', '', 'O design de sobrancelhas é um serviço que molda e define as sobrancelhas de acordo com o formato do rosto, realçando a expressão facial.', 40),
(30, '', '', '', 'Manicure e Pedicure', '', 'A manicure e pedicure são serviços de embelezamento das unhas das mãos e dos pés, que incluem corte, limpeza, esmaltação e cuidados específicos.', 70),
(31, '', '', '', 'Unhas de Gel', '', 'As unhas de gel são uma técnica que utiliza um gel especial para alongar e fortalecer as unhas naturais, proporcionando um aspecto mais elegante e duradouro.', 100),
(32, '', '', '', 'Massagem Relaxante', '', 'A massagem relaxante é uma técnica que utiliza movimentos suaves e rítmicos para aliviar tensões musculares, promover o relaxamento e o bem-estar geral.', 80),
(33, '', '', '', 'Maquiagem', '', 'A maquiagem é um serviço que realça a beleza facial por meio da aplicação de produtos cosméticos, valorizando os traços e a aparência.', 90),
(34, '', '', '', 'Tratamento para Estrias', '', 'O tratamento para estrias é um conjunto de técnicas que visam reduzir a aparência das estrias na pele, promovendo uma aparência mais uniforme e suave.', 150),
(35, '', '', '', '', 'Massagem Relaxante', 'A massagem relaxante é uma técnica que utiliza movimentos suaves e rítmicos para aliviar tensões musculares, promover o relaxamento e o bem-estar geral.', 80),
(36, '', '', '', '', 'Reflexologia', 'A reflexologia é uma terapia que aplica pressão em pontos específicos nos pés, mãos e orelhas, estimulando os sistemas do corpo e promovendo o equilíbrio.', 90),
(37, '', '', '', '', 'Aromaterapia', 'A aromaterapia é uma terapia que utiliza óleos essenciais extraídos de plantas para estimular os sentidos, promover o relaxamento e aliviar o estresse.', 70),
(38, '', '', '', '', 'Terapia com Pedras Quentes', 'A terapia com pedras quentes envolve a aplicação de pedras aquecidas sobre o corpo, combinando massagem relaxante e calor para aliviar tensões musculares e promover o relaxamento.', 120),
(39, '', '', '', '', 'Terapia com Velas', 'A terapia com velas é uma técnica que utiliza velas especiais derretidas para massagear o corpo, proporcionando um ambiente relaxante e agradável.', 100),
(40, '', '', '', '', 'Terapia de Sons', 'A terapia de sons utiliza instrumentos musicais, como tambores, chocalhos e tigelas tibetanas, para promover relaxamento, equilíbrio e bem-estar através das vibrações sonoras.', 80),
(41, '', '', '', '', 'Reiki', 'O Reiki é uma terapia energética que utiliza a imposição das mãos para canalizar a energia vital universal, promovendo o equilíbrio energético e o bem-estar físico e emocional.', 100),
(42, '', '', '', '', 'Meditação Guiada', 'A meditação guiada é uma prática que utiliza instruções verbais para induzir um estado de relaxamento profundo, concentração mental e tranquilidade emocional.', 90);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


/*Exemplo de tabela*/
INSERT INTO servicos (tratamento_facial, descricao) VALUES
  ('Limpeza de Pele Profunda', 'A limpeza de pele profunda é um tratamento que remove impurezas, como cravos e células mortas, proporcionando uma pele mais limpa e saudável.'),
  ('Peeling Químico', 'O peeling químico é um procedimento que utiliza substâncias químicas para esfoliar a pele, promovendo a renovação celular e melhorando a textura e o tom da pele.'),
  ('Microdermoabrasão', 'A microdermoabrasão é um tratamento não invasivo que utiliza microcristais para esfoliar suavemente a camada mais superficial da pele, reduzindo rugas finas, manchas e poros dilatados.'),
  ('Radiofrequência Facial', 'A radiofrequência facial é um tratamento que utiliza energia de radiofrequência para estimular a produção de colágeno, melhorar a elasticidade da pele e reduzir rugas e flacidez.'),
  ('Fotorejuvenescimento', 'O fotorejuvenescimento é um procedimento que utiliza luz intensa pulsada (LIP) para tratar manchas, vasinhos, rugas finas e estimular a produção de colágeno na pele.'),
  ('Preenchimento Facial', 'O preenchimento facial é um procedimento estético que utiliza substâncias injetáveis para preencher rugas, sulcos e volumizar áreas do rosto, proporcionando um aspecto mais jovem e revitalizado.'),
  ('Toxina Botulínica (Botox)', 'A toxina botulínica, comumente conhecida como Botox, é um tratamento que consiste na aplicação de injeções para relaxar os músculos faciais e suavizar rugas de expressão.'),
  ('Tratamento de Acne e Manchas', 'O tratamento de acne e manchas visa reduzir a acne, clarear manchas e uniformizar a pele, utilizando técnicas como limpeza de pele, peelings e produtos específicos.');

/*Update de valores*/
UPDATE servicos SET valor = 
  CASE
    WHEN tratamento_facial = 'Limpeza de Pele Profunda' THEN 80.00
    WHEN tratamento_facial = 'Peeling Químico' THEN 120.00
    WHEN tratamento_facial = 'Microdermoabrasão' THEN 150.00
    WHEN tratamento_facial = 'Radiofrequência Facial' THEN 200.00
    WHEN tratamento_facial = 'Fotorejuvenescimento' THEN 180.00
    WHEN tratamento_facial = 'Preenchimento Facial' THEN 250.00
    WHEN tratamento_facial = 'Toxina Botulínica (Botox)' THEN 300.00
    WHEN tratamento_facial = 'Tratamento de Acne e Manchas' THEN 120.00
    WHEN tratamento_corporal = 'Drenagem Linfática' THEN 100.00
    WHEN tratamento_corporal = 'Massagem Relaxante' THEN 80.00
    WHEN tratamento_corporal = 'Tratamento para Redução de Medidas' THEN 150.00
    WHEN tratamento_corporal = 'Tratamento para Celulite' THEN 120.00
    WHEN tratamento_corporal = 'Esfoliação Corporal' THEN 60.00
    WHEN tratamento_corporal = 'Envoltório Corporal' THEN 100.00
    WHEN tratamento_corporal = 'Tratamento para Flacidez' THEN 200.00
    WHEN tratamento_corporal = 'Criolipólise' THEN 350.00
    WHEN estetica_capilar = 'Hidratação Capilar' THEN 60.00
    WHEN estetica_capilar = 'Cauterização Capilar' THEN 120.00
    WHEN estetica_capilar = 'Coloração e Tintura' THEN 80.00
    WHEN estetica_capilar = 'Tratamento para Queda de Cabelo' THEN 150.00
    WHEN estetica_capilar = 'Escova Progressiva' THEN 200.00
    WHEN estetica_capilar = 'Tratamento para Couro Cabeludo Sensível' THEN 100.00
    WHEN estetica_capilar = 'Tratamento Anticaspa' THEN 80.00
    WHEN estetica_capilar = 'Tratamento para Cabelos Danificados' THEN 120.00
    WHEN embelezamento = 'Depilação' THEN 50.00
    WHEN embelezamento = 'Bronzeamento Artificial' THEN 80.00
    WHEN embelezamento = 'Design de Sobrancelhas' THEN 40.00
    WHEN embelezamento = 'Manicure e Pedicure' THEN 70.00
    WHEN embelezamento = 'Unhas de Gel' THEN 100.00
    WHEN embelezamento = 'Massagem Relaxante' THEN 80.00
    WHEN embelezamento = 'Maquiagem' THEN 90.00
    WHEN embelezamento = 'Tratamento para Estrias' THEN 150.00
    WHEN terapias_relaxantes = 'Massagem Relaxante' THEN 80.00
    WHEN terapias_relaxantes = 'Reflexologia' THEN 90.00
    WHEN terapias_relaxantes = 'Aromaterapia' THEN 70.00
    WHEN terapias_relaxantes = 'Terapia com Pedras Quentes' THEN 120.00
    WHEN terapias_relaxantes = 'Terapia com Velas' THEN 100.00
    WHEN terapias_relaxantes = 'Terapia de Sons' THEN 80.00
    WHEN terapias_relaxantes = 'Reiki' THEN 100.00
    WHEN terapias_relaxantes = 'Meditação Guiada' THEN 90.00
    ELSE 0.00
  END;


UPDATE servicos SET descrica_nome =
  CASE
    WHEN tratamento_facial = 'Limpeza de Pele Profunda' THEN 'Limpeza de Pele'
    WHEN tratamento_facial = 'Peeling Químico' THEN 'Peeling Químico'
    WHEN tratamento_facial = 'Microdermoabrasão' THEN 'Microdermoabrasão'
    WHEN tratamento_facial = 'Radiofrequência Facial' THEN 'Radiofrequência Facial'
    WHEN tratamento_facial = 'Fotorejuvenescimento' THEN 'Fotorejuvenescimento'
    WHEN tratamento_facial = 'Preenchimento Facial' THEN 'Preenchimento Facial'
    WHEN tratamento_facial = 'Toxina Botulínica (Botox)' THEN 'Toxina Botulínica (Botox)'
    WHEN tratamento_facial = 'Tratamento de Acne e Manchas' THEN 'Tratamento de Acne e Manchas'
    WHEN tratamento_corporal = 'Drenagem Linfática' THEN 'Drenagem Linfática'
    WHEN tratamento_corporal = 'Massagem Relaxante' THEN 'Massagem Relaxante'
    WHEN tratamento_corporal = 'Tratamento para Redução de Medidas' THEN 'Redução de Medidas'
    WHEN tratamento_corporal = 'Tratamento para Celulite' THEN 'Tratamento de Celulite'
    WHEN tratamento_corporal = 'Esfoliação Corporal' THEN 'Esfoliação Corporal'
    WHEN tratamento_corporal = 'Envoltório Corporal' THEN 'Envoltório Corporal'
    WHEN tratamento_corporal = 'Tratamento para Flacidez' THEN 'Tratamento para Flacidez'
    WHEN tratamento_corporal = 'Criolipólise' THEN 'Criolipólise'
    WHEN estetica_capilar = 'Hidratação Capilar' THEN 'Hidratação Capilar'
    WHEN estetica_capilar = 'Cauterização Capilar' THEN 'Cauterização Capilar'
    WHEN estetica_capilar = 'Coloração e Tintura' THEN 'Coloração e Tintura'
    WHEN estetica_capilar = 'Tratamento para Queda de Cabelo' THEN 'Tratamento Queda de Cabelo'
    WHEN estetica_capilar = 'Escova Progressiva' THEN 'Escova Progressiva'
    WHEN estetica_capilar = 'Tratamento para Couro Cabeludo Sensível' THEN 'Couro Cabeludo Sensível'
    WHEN estetica_capilar = 'Tratamento Anticaspa' THEN 'Tratamento Anticaspa'
    WHEN estetica_capilar = 'Tratamento para Cabelos Danificados' THEN 'Cabelos Danificados'
    WHEN embelezamento = 'Depilação' THEN 'Depilação'
    WHEN embelezamento = 'Bronzeamento Artificial' THEN 'Bronzeamento Artificial'
    WHEN embelezamento = 'Design de Sobrancelhas' THEN 'Design de Sobrancelhas'
    WHEN embelezamento = 'Manicure e Pedicure' THEN 'Manicure e Pedicure'
    WHEN embelezamento = 'Maquiagem' THEN 'Maquiagem'
    WHEN terapias_relaxantes = 'Reflexologia' THEN 'Reflexologia'
    WHEN terapias_relaxantes = 'Aromaterapia' THEN 'Aromaterapia'
    WHEN terapias_relaxantes = 'Terapia com Pedras Quentes' THEN 'Pedras Quentes'
    WHEN terapias_relaxantes = 'Terapia com Velas' THEN 'Terapia com Velas'
    WHEN terapias_relaxantes = 'Terapia de Sons' THEN 'Terapia de Sons'
    WHEN terapias_relaxantes = 'Reiki' THEN 'Reiki'
    WHEN terapias_relaxantes = 'Meditação Guiada' THEN 'Meditação Guiada'
    ELSE ''
  END;

ALTER TABLE usuarios
ADD rg VARCHAR(20);


UPDATE usuarios
SET rg = FLOOR(RAND() * 100000000)
WHERE id BETWEEN 1 AND 19;

ALTER TABLE usuarios
ADD cpf VARCHAR(25);


UPDATE usuarios
SET cpf = FLOOR(RAND() * 100000000)
WHERE id BETWEEN 1 AND 19;

ALTER TABLE usuarios
ADD tel VARCHAR(15);

UPDATE usuarios
SET tel = CONCAT(FLOOR(RAND() * 89) + 11, LPAD(FLOOR(RAND() * 90000000) + 10000000, 8, '0'))
WHERE id BETWEEN 1 AND 19;

CREATE TABLE profissionais (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome_profissional VARCHAR(255) NOT NULL,
    crm VARCHAR(20) NOT NULL,
    especialidade VARCHAR(255) NOT NULL,
    servicos VARCHAR(255) NOT NULL,
    dias_atendimento VARCHAR(255) NOT NULL
);

INSERT INTO profissionais (id, nome_profissional, crm, especialidade, servicos, dias_atendimento) VALUES
(1, 'Mariana Silva', '12345', 'Tratamento Facial', 'Limpeza de Pele, Peeling, Máscara Facial', 'Segunda, Terça, Quarta, Quinta, Sexta, Sábado'),
(2, 'Carolina Santos', '54321', 'Tratamento Corporal', 'Drenagem Linfática, Massagem Modeladora, Endermologia', 'Segunda, Terça, Quarta, Quinta, Sexta, Sábado'),
(3, 'Ana Oliveira', '98765', 'Estética Capilar', 'Corte, Coloração, Hidratação Capilar', 'Segunda, Terça, Quarta, Quinta, Sexta, Sábado'),
(4, 'Bruna Costa', '56789', 'Embelezamento', 'Manicure, Pedicure, Design de Sobrancelhas', 'Segunda, Terça, Quarta, Quinta, Sexta, Sábado'),
(5, 'Rafaela Pereira', '24680', 'Terapias Relaxantes', 'Massagem Relaxante, Reflexologia, Aromaterapia', 'Segunda, Terça, Quarta, Quinta, Sexta, Sábado'),
(6, 'Laura Mendes', '13579', 'Tratamento Facial', 'Limpeza de Pele, Peeling, Máscara Facial', 'Segunda, Terça, Quarta, Quinta, Sexta, Sábado'),
(7, 'Juliana Lima', '86420', 'Tratamento Corporal', 'Drenagem Linfática, Massagem Modeladora, Endermologia', 'Segunda, Terça, Quarta, Quinta, Sexta, Sábado'),
(8, 'Camila Pereira', '75319', 'Estética Capilar', 'Corte, Coloração, Hidratação Capilar', 'Segunda, Terça, Quarta'),
(9, 'Mariana Castro', '19283', 'Embelezamento', 'Manicure, Pedicure, Design de Sobrancelhas', 'Quinta, Sexta, Sábado'),
(10, 'Lucas Sousa', '38475', 'Terapias Relaxantes', 'Massagem Relaxante, Reflexologia, Aromaterapia', 'Segunda, Terça, Quarta, Quinta'),
(11, 'Fernanda Costa', '62735', 'Tratamento Facial', 'Limpeza de Pele, Peeling, Máscara Facial', 'Sexta, Sábado'),
(12, 'João Fernandes', '98756', 'Tratamento Corporal', 'Drenagem Linfática, Massagem Modeladora, Endermologia', 'Quarta, Quinta, Sexta, Sábado'),
(13, 'Gustavo Almeida', '56743', 'Estética Capilar', 'Corte, Coloração, Hidratação Capilar', 'Terça, Quarta, Quinta'),
(14, 'Isabela Santos', '69087', 'Embelezamento', 'Manicure, Pedicure, Design de Sobrancelhas', 'Segunda, Terça, Quarta, Quinta'),
(15, 'Ricardo Lima', '23894', 'Terapias Relaxantes', 'Massagem Relaxante, Reflexologia, Aromaterapia', 'Quarta, Quinta, Sexta, Sábado'),
(16, 'Mariana Castro', '92736', 'Tratamento Facial', 'Limpeza de Pele, Peeling, Máscara Facial', 'Segunda, Terça, Quarta, Quinta'),
(17, 'Paulo Lima', '54321', 'Tratamento Corporal', 'Drenagem Linfática, Massagem Modeladora, Endermologia', 'Segunda, Quarta, Sexta'),
(18, 'Fernanda Castro', '98765', 'Estética Capilar', 'Corte, Coloração, Hidratação Capilar', 'Terça, Quinta, Sábado'),
(19, 'Renato Santos', '45678', 'Embelezamento', 'Manicure, Pedicure, Design de Sobrancelhas', 'Segunda, Quarta, Sexta'),
(20, 'Amanda Oliveira', '90876', 'Terapias Relaxantes', 'Massagem Relaxante, Reflexologia, Aromaterapia', 'Terça, Quinta, Sábado'),
(21, 'Pedro Fernandes', '56789', 'Tratamento Facial', 'Limpeza de Pele, Peeling, Máscara Facial', 'Segunda, Quarta, Sexta'),
(22, 'Carla Lima', '34657', 'Tratamento Corporal', 'Drenagem Linfática, Massagem Modeladora, Endermologia', 'Terça, Quinta, Sábado'),
(23, 'Rafael Mendes', '23984', 'Estética Capilar', 'Corte, Coloração, Hidratação Capilar', 'Segunda, Quarta, Sexta'),
(24, 'Patrícia Costa', '10293', 'Embelezamento', 'Manicure, Pedicure, Design de Sobrancelhas', 'Terça, Quinta, Sábado'),
(25, 'Marcelo Almeida', '56723', 'Terapias Relaxantes', 'Massagem Relaxante, Reflexologia, Aromaterapia', 'Segunda, Quarta, Sexta');
