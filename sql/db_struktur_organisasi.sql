USE db;

create table struktur_organisasi
(
    id         int auto_increment
        primary key,
    parent_id  int                                                             null,
    tipe       enum ('GROUP', 'PERUSAHAAN', 'CABANG', 'DEPARTEMEN', 'JABATAN') not null,
    nama       varchar(255)                                                    not null,
    singkatan  char(50)                                                        not null,
    alias      varchar(255)                                                    null,
    kode       char(100)                                                       not null,
    created_at int                                                             null,
    updated_at int                                                             null,
    created_by varchar(10)                                                     null,
    updated_by varchar(10)                                                     null,
    constraint kode
        unique (kode),
    constraint fk_struktur_organisasi_parent
        foreign key (parent_id) references struktur_organisasi (id)
            on update cascade
);

create index idx_struktur_organisasi_parent
    on struktur_organisasi (parent_id);

INSERT INTO db.struktur_organisasi (id, parent_id, tipe, nama, singkatan, alias, kode, created_at, updated_at, created_by, updated_by) VALUES (1, null, 'GROUP', 'Group', 'TMS', null, 'GROUP', 1626037790, 1626065167, null, null);
INSERT INTO db.struktur_organisasi (id, parent_id, tipe, nama, singkatan, alias, kode, created_at, updated_at, created_by, updated_by) VALUES (2, 1, 'PERUSAHAAN', 'Perusahaan 1', 'TMS', null, 'TMS', 1626038159, 1626064982, null, null);
INSERT INTO db.struktur_organisasi (id, parent_id, tipe, nama, singkatan, alias, kode, created_at, updated_at, created_by, updated_by) VALUES (3, 2, 'JABATAN', 'Direktur Utama', 'Dirut', null, 'Dirut', 1626064905, 1626065478, null, null);
INSERT INTO db.struktur_organisasi (id, parent_id, tipe, nama, singkatan, alias, kode, created_at, updated_at, created_by, updated_by) VALUES (4, 1, 'PERUSAHAAN', 'Perusahaan 2', 'JFS', null, 'JFS', 1626065099, 1626065109, null, null);
INSERT INTO db.struktur_organisasi (id, parent_id, tipe, nama, singkatan, alias, kode, created_at, updated_at, created_by, updated_by) VALUES (5, 4, 'CABANG', 'Jakarta', 'JKT', null, 'JKT', 1626065204, 1626065204, null, null);
INSERT INTO db.struktur_organisasi (id, parent_id, tipe, nama, singkatan, alias, kode, created_at, updated_at, created_by, updated_by) VALUES (6, 4, 'CABANG', 'Yogyakarta', 'Yogya', null, 'YGY', 1626065232, 1626065232, null, null);
INSERT INTO db.struktur_organisasi (id, parent_id, tipe, nama, singkatan, alias, kode, created_at, updated_at, created_by, updated_by) VALUES (7, 6, 'JABATAN', 'Kepala Cabang', 'Kacab', null, 'Kacab', 1626065283, 1626065283, null, null);