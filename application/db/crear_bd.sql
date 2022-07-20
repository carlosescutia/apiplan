DROP TABLE IF EXISTS ods;
CREATE TABLE ods (
    id_ods integer,
    nom_ods text
);

DROP TABLE IF EXISTS metas;
CREATE TABLE metas (
    id_meta text,
    id_ods integer,
    nom_meta text
);
