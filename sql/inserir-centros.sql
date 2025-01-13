INSERT INTO tipos (nome) VALUES 
    ('CER II (Física e Intelectual)'),
    ('CER III (Auditiva, Física e Intelectual)'),
    ('CER IV (Auditiva, Física, Intelectual e Visual)'),
    ('Modalidade Ortopédica (Fixa)');

-- Inserindo organizações
INSERT INTO organizacoes (nome) VALUES 
    ('Associação'),
    ('Fundação'),
    ('ONG'),
    ('Instituição Pública'),
    ('Instituição Privada');

-- Inserindo modelos
INSERT INTO modelos (nome) VALUES 
    ('Ambulatorial'),
    ('Hospitalar'),
    ('Residencial Terapêutico'),
    ('Modalidade Móvel');

-- Inserindo municípios
INSERT INTO municipios (nome) VALUES 
    ('Maceió'),
    ('Arapiraca'),
    ('Palmeira dos Índios'),
    ('Delmiro Gouveia'),
    ('Penedo');

-- Inserindo centros de reabilitação
INSERT INTO centros_reabilitacao (nome, tipo_id, organizacao_id, modelo_id, municipio_id, endereco, contato, email, redes_sociais, horario, historia) VALUES 
    ('APAE Arapiraca', 1, 1, 1, 2, 'Rua Exemplo 123, Centro, Arapiraca', '(82) 99999-9999', 'apae.arapiraca@example.com', 'facebook.com/apaearapiraca', 'Seg-Sex, 8h às 17h', 'Centro de referência para reabilitação física e intelectual.'),
    ('CRER Maceió', 2, 4, 2, 1, 'Av. Principal 456, Farol, Maceió', '(82) 98888-8888', 'crer.maceio@example.com', 'instagram.com/crermaceio', 'Seg-Sex, 7h às 18h', 'Atendimento especializado em reabilitação auditiva e física.'),
    ('Reabilitar Penedo', 3, 3, 1, 5, 'Praça Central 789, Penedo', '(82) 97777-7777', 'reabilitar.penedo@example.com', 'twitter.com/reabilitarpenedo', 'Seg-Sab, 8h às 12h', 'Unidade moderna com foco em reabilitação visual e intelectual.'),
    ('Reab Vida Palmeira', 1, 2, 4, 3, 'Rua das Flores 321, Palmeira dos Índios', '(82) 96666-6666', 'reabvida.palmeira@example.com', 'linkedin.com/reabvida', 'Seg-Sex, 9h às 17h', 'Centro integrado para atendimento físico e ortopédico.'),
    ('Vida Nova Delmiro', 4, 5, 3, 4, 'Av. Principal 654, Centro, Delmiro Gouveia', '(82) 95555-5555', 'vidanova.delmiro@example.com', 'youtube.com/vidanovadelmiro', 'Seg-Dom, 8h às 16h', 'Atendimento móvel e fixo com foco em ortopedia.');

-- Inserindo imagens
INSERT INTO imagens (centro_id, caminho, descricao) VALUES 
    (6, 'assets/img/portfolio/apae_entrada.jpg', 'Entrada principal da APAE de Arapiraca'),
    (7, 'assets/img/portfolio/apae_interior.jpg', 'Interior do centro da APAE'),
    (8, 'assets/img/portfolio/crer_auditorio.jpg', 'Auditório do CRER Maceió'),
    (9, 'assets/img/portfolio/reabilitar_lab.jpg', 'Laboratório de reabilitação do Reabilitar Penedo'),
    (10, 'assets/img/portfolio/reabvida_piscina.jpg', 'Piscina terapêutica do Reab Vida Palmeira'),
    (11, 'assets/img/portfolio/vidanova_clinica.jpg', 'Área clínica do Vida Nova Delmiro');