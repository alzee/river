--
-- PostgreSQL database dump
--

-- Dumped from database version 15.4
-- Dumped by pg_dump version 15.4

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: notify_messenger_messages(); Type: FUNCTION; Schema: public; Owner: river
--

CREATE FUNCTION public.notify_messenger_messages() RETURNS trigger
    LANGUAGE plpgsql
    AS $$
            BEGIN
                PERFORM pg_notify('messenger_messages', NEW.queue_name::text);
                RETURN NEW;
            END;
        $$;


ALTER FUNCTION public.notify_messenger_messages() OWNER TO river;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: cost; Type: TABLE; Schema: public; Owner: river
--

CREATE TABLE public.cost (
    id integer NOT NULL,
    pattern_id integer NOT NULL,
    nei_rong character varying(255) DEFAULT NULL::character varying,
    zong_liang character varying(255) DEFAULT NULL::character varying,
    zong_jia double precision,
    dan_jia double precision,
    dan_wei character varying(255) DEFAULT NULL::character varying,
    fang_fa character varying(255) DEFAULT NULL::character varying,
    shi_yong_liang double precision,
    chan_liang double precision,
    type character varying(255) DEFAULT NULL::character varying
);


ALTER TABLE public.cost OWNER TO river;

--
-- Name: cost_id_seq; Type: SEQUENCE; Schema: public; Owner: river
--

CREATE SEQUENCE public.cost_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cost_id_seq OWNER TO river;

--
-- Name: doctrine_migration_versions; Type: TABLE; Schema: public; Owner: river
--

CREATE TABLE public.doctrine_migration_versions (
    version character varying(191) NOT NULL,
    executed_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    execution_time integer
);


ALTER TABLE public.doctrine_migration_versions OWNER TO river;

--
-- Name: fertilizer; Type: TABLE; Schema: public; Owner: river
--

CREATE TABLE public.fertilizer (
    id integer NOT NULL,
    pattern_id integer NOT NULL,
    date date,
    cuo_shi1 character varying(255) DEFAULT NULL::character varying,
    shi_yong_liang1 character varying(255) DEFAULT NULL::character varying,
    cuo_shi2 character varying(255) DEFAULT NULL::character varying,
    shi_yong_liang2 character varying(255) DEFAULT NULL::character varying,
    cuo_shi3 character varying(255) DEFAULT NULL::character varying,
    shi_yong_liang3 character varying(255) DEFAULT NULL::character varying,
    cuo_shi4 character varying(255) DEFAULT NULL::character varying,
    shi_yong_liang4 character varying(255) DEFAULT NULL::character varying,
    type character varying(255) DEFAULT NULL::character varying
);


ALTER TABLE public.fertilizer OWNER TO river;

--
-- Name: fertilizer_id_seq; Type: SEQUENCE; Schema: public; Owner: river
--

CREATE SEQUENCE public.fertilizer_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.fertilizer_id_seq OWNER TO river;

--
-- Name: irrigation; Type: TABLE; Schema: public; Owner: river
--

CREATE TABLE public.irrigation (
    id integer NOT NULL,
    pattern_id integer NOT NULL,
    date date,
    guan_shui_liang integer,
    type character varying(255) DEFAULT NULL::character varying
);


ALTER TABLE public.irrigation OWNER TO river;

--
-- Name: irrigation_id_seq; Type: SEQUENCE; Schema: public; Owner: river
--

CREATE SEQUENCE public.irrigation_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.irrigation_id_seq OWNER TO river;

--
-- Name: messenger_messages; Type: TABLE; Schema: public; Owner: river
--

CREATE TABLE public.messenger_messages (
    id bigint NOT NULL,
    body text NOT NULL,
    headers text NOT NULL,
    queue_name character varying(190) NOT NULL,
    created_at timestamp(0) without time zone NOT NULL,
    available_at timestamp(0) without time zone NOT NULL,
    delivered_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone
);


ALTER TABLE public.messenger_messages OWNER TO river;

--
-- Name: COLUMN messenger_messages.created_at; Type: COMMENT; Schema: public; Owner: river
--

COMMENT ON COLUMN public.messenger_messages.created_at IS '(DC2Type:datetime_immutable)';


--
-- Name: COLUMN messenger_messages.available_at; Type: COMMENT; Schema: public; Owner: river
--

COMMENT ON COLUMN public.messenger_messages.available_at IS '(DC2Type:datetime_immutable)';


--
-- Name: COLUMN messenger_messages.delivered_at; Type: COMMENT; Schema: public; Owner: river
--

COMMENT ON COLUMN public.messenger_messages.delivered_at IS '(DC2Type:datetime_immutable)';


--
-- Name: messenger_messages_id_seq; Type: SEQUENCE; Schema: public; Owner: river
--

CREATE SEQUENCE public.messenger_messages_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.messenger_messages_id_seq OWNER TO river;

--
-- Name: messenger_messages_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: river
--

ALTER SEQUENCE public.messenger_messages_id_seq OWNED BY public.messenger_messages.id;


--
-- Name: pattern; Type: TABLE; Schema: public; Owner: river
--

CREATE TABLE public.pattern (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    location character varying(255) DEFAULT NULL::character varying,
    latitude double precision,
    longitude double precision,
    area integer,
    tu_rang_zhi_di character varying(255) DEFAULT NULL::character varying,
    yan_jian_cheng_du character varying(255) DEFAULT NULL::character varying,
    di_li_deng_ji double precision,
    yan_jian_cheng_yin character varying(255) DEFAULT NULL::character varying,
    zhu_yao_zhang_ai character varying(255) DEFAULT NULL::character varying,
    zhong_zhi_zuo_wu character varying(255) DEFAULT NULL::character varying,
    guan_pai_xie_tong character varying(255) DEFAULT NULL::character varying,
    xiao_zhang_pei_fei character varying(255) DEFAULT NULL::character varying,
    zhong_zi_nong_yi character varying(255) DEFAULT NULL::character varying,
    gen_zong_jian_ce text,
    mo_shi_dan_jia integer,
    mo_shi_zong_jia double precision,
    zhong_shi_dan_chan double precision,
    guan_gai_ding_e integer,
    yan_jian_xia_jiang double precision,
    di_li_ti_sheng double precision,
    dan_chan_ti_sheng double precision,
    shui_xiao_ti_sheng double precision,
    yan_zheng_zhuan_ti double precision,
    zhuan_ti_fu_ze_ren character varying(255) DEFAULT NULL::character varying,
    shi_shi_fu_ze_ren character varying(255) DEFAULT NULL::character varying,
    guan_pai_she_ji character varying(255) DEFAULT NULL::character varying,
    pei_fei_she_ji character varying(255) DEFAULT NULL::character varying,
    zhong_zi_que_ren character varying(255) DEFAULT NULL::character varying,
    nong_yi_she_ji character varying(255) DEFAULT NULL::character varying,
    jian_ce_shen_he character varying(255) DEFAULT NULL::character varying,
    mo_shi_shen_he character varying(255) DEFAULT NULL::character varying,
    ke_ti_shen_pi character varying(255) DEFAULT NULL::character varying,
    xiang_mu_pi_zhun character varying(255) DEFAULT NULL::character varying,
    gao_cheng integer,
    yan_hua_jian_hua character varying(255) DEFAULT NULL::character varying,
    quan_yan_liang double precision,
    you_ji_zhi_han_liang double precision,
    ec double precision,
    ph double precision,
    guan_gai_fang_shi character varying(255) DEFAULT NULL::character varying,
    fei_liao_shi_yong character varying(255) DEFAULT NULL::character varying,
    yu_qi_dan_chan integer,
    chan_neng_ti_sheng character varying(255) DEFAULT NULL::character varying,
    tou_ru double precision,
    chan_chu double precision,
    guan_pai_xie_tong_cuo_shi text,
    xiao_zhang_pei_fei_yao_dian text,
    nong_yi_zai_pei_te_dian text,
    gen_zong_jian_ce_fang_an text,
    zu_zhi_shi_shi_xie_tong text,
    image character varying(255) DEFAULT NULL::character varying,
    created_at timestamp(0) without time zone NOT NULL,
    updated_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    zhong_zi_pin_zhong character varying(255) DEFAULT NULL::character varying,
    sn integer NOT NULL,
    guan_gai_ci_shu smallint,
    zong_guan_shui_liang integer,
    pai_shui_fang_shi character varying(255) DEFAULT NULL::character varying,
    pai_shui_mai_shen double precision,
    pai_shui_jian_ju integer,
    hui_yong_neng_li integer,
    hui_yong_kong_zhi_shui_zhi double precision,
    zhong_shi_mian_ji integer,
    zhu_ze_zhuan_ti integer,
    she_ji_zong_tou_ru double precision,
    he_suan_zong_tou_ru double precision,
    mu_jun_tou_ru integer,
    mu_jun_chan_chu integer,
    chan_tou_bi double precision,
    xiao_zhang_cuo_shi character varying(255) DEFAULT NULL::character varying,
    zeng_tan_pei_fei character varying(255) DEFAULT NULL::character varying,
    nong_yi_zhi_bao character varying(255) DEFAULT NULL::character varying,
    yu_qi_zong_chan integer,
    guan_pai_xie_tong_shen_he character varying(255) DEFAULT NULL::character varying,
    xiao_zhang_pei_fei_shen_he character varying(255) DEFAULT NULL::character varying,
    zhong_zi_nong_yi_shen_he character varying(255) DEFAULT NULL::character varying,
    gen_zong_jian_ce_shen_he character varying(255) DEFAULT NULL::character varying,
    ji_shu_mo_shi_shen_he character varying(255) DEFAULT NULL::character varying,
    cai_wu_yu_suan_shen_he character varying(255) DEFAULT NULL::character varying
);


ALTER TABLE public.pattern OWNER TO river;

--
-- Name: COLUMN pattern.created_at; Type: COMMENT; Schema: public; Owner: river
--

COMMENT ON COLUMN public.pattern.created_at IS '(DC2Type:datetime_immutable)';


--
-- Name: COLUMN pattern.updated_at; Type: COMMENT; Schema: public; Owner: river
--

COMMENT ON COLUMN public.pattern.updated_at IS '(DC2Type:datetime_immutable)';


--
-- Name: pattern_id_seq; Type: SEQUENCE; Schema: public; Owner: river
--

CREATE SEQUENCE public.pattern_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.pattern_id_seq OWNER TO river;

--
-- Name: seed; Type: TABLE; Schema: public; Owner: river
--

CREATE TABLE public.seed (
    id integer NOT NULL,
    pattern_id integer NOT NULL,
    date date,
    nong_yi_ji_shu character varying(255) DEFAULT NULL::character varying,
    wu_li_jie_gou_gai_shan character varying(255) DEFAULT NULL::character varying,
    cuo_shi3 character varying(255) DEFAULT NULL::character varying,
    type character varying(255) DEFAULT NULL::character varying
);


ALTER TABLE public.seed OWNER TO river;

--
-- Name: seed_id_seq; Type: SEQUENCE; Schema: public; Owner: river
--

CREATE SEQUENCE public.seed_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.seed_id_seq OWNER TO river;

--
-- Name: soil; Type: TABLE; Schema: public; Owner: river
--

CREATE TABLE public.soil (
    id integer NOT NULL,
    pattern_id integer,
    nian_fen_sha character varying(255) DEFAULT NULL::character varying,
    tu_rang_zhi_di character varying(255) DEFAULT NULL::character varying,
    gan_rong_liang double precision,
    kong_xi_du double precision,
    quan_dan double precision,
    quan_lin double precision,
    quan_jia double precision,
    you_ji_zhi double precision,
    xiao_tai_dan double precision,
    an_tai_dan double precision,
    you_xiao_lin double precision,
    you_xiao_jia double precision,
    jian_jie_dan double precision,
    quan_yan_liang double precision,
    ec double precision,
    ph double precision,
    bao_he_han_shui_lv double precision,
    bao_he_dao_shui_lv double precision,
    tian_jian_chi_shui_liang double precision,
    type character varying(255)
);


ALTER TABLE public.soil OWNER TO river;

--
-- Name: soil_id_seq; Type: SEQUENCE; Schema: public; Owner: river
--

CREATE SEQUENCE public.soil_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.soil_id_seq OWNER TO river;

--
-- Name: tracking; Type: TABLE; Schema: public; Owner: river
--

CREATE TABLE public.tracking (
    id integer NOT NULL,
    pattern_id integer NOT NULL,
    fang_fa_she_bei character varying(255) DEFAULT NULL::character varying,
    jian_ce_pin_ci character varying(255) DEFAULT NULL::character varying,
    xian_di_yuan_cheng character varying(255) DEFAULT NULL::character varying,
    jian_ce_zhuan_ti character varying(255) DEFAULT NULL::character varying,
    type character varying(255)
);


ALTER TABLE public.tracking OWNER TO river;

--
-- Name: tracking_id_seq; Type: SEQUENCE; Schema: public; Owner: river
--

CREATE SEQUENCE public.tracking_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tracking_id_seq OWNER TO river;

--
-- Name: user; Type: TABLE; Schema: public; Owner: river
--

CREATE TABLE public."user" (
    id integer NOT NULL,
    username character varying(180) NOT NULL,
    roles json NOT NULL,
    password character varying(255) NOT NULL,
    plain_password character varying(255) DEFAULT NULL::character varying,
    openid character varying(255) DEFAULT NULL::character varying,
    name character varying(255) DEFAULT NULL::character varying,
    phone character varying(255) DEFAULT NULL::character varying,
    avatar character varying(255) DEFAULT NULL::character varying
);


ALTER TABLE public."user" OWNER TO river;

--
-- Name: user_id_seq; Type: SEQUENCE; Schema: public; Owner: river
--

CREATE SEQUENCE public.user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_id_seq OWNER TO river;

--
-- Name: messenger_messages id; Type: DEFAULT; Schema: public; Owner: river
--

ALTER TABLE ONLY public.messenger_messages ALTER COLUMN id SET DEFAULT nextval('public.messenger_messages_id_seq'::regclass);


--
-- Data for Name: cost; Type: TABLE DATA; Schema: public; Owner: river
--

COPY public.cost (id, pattern_id, nei_rong, zong_liang, zong_jia, dan_jia, dan_wei, fang_fa, shi_yong_liang, chan_liang, type) FROM stdin;
43	4	\N	\N	\N	\N	\N	\N	\N	\N	高标准农田建设
44	4	\N	\N	\N	\N	\N	\N	\N	\N	平田整地
45	4	\N	\N	\N	\N	\N	\N	\N	\N	播种
46	4	\N	\N	\N	\N	\N	\N	\N	\N	灌溉排水
47	4	\N	\N	\N	\N	\N	\N	\N	\N	施肥1
48	4	\N	\N	\N	\N	\N	\N	\N	\N	施肥2
49	4	\N	\N	\N	\N	\N	\N	\N	\N	施肥3
50	4	\N	\N	\N	\N	\N	\N	\N	\N	管护1
51	4	\N	\N	\N	\N	\N	\N	\N	\N	管护2
52	4	\N	\N	\N	\N	\N	\N	\N	\N	管护3
53	4	\N	\N	\N	\N	\N	\N	\N	\N	产品1
54	4	\N	\N	\N	\N	\N	\N	\N	\N	产品2
55	4	\N	\N	\N	\N	\N	\N	\N	\N	产品3
56	4	\N	\N	\N	\N	\N	\N	\N	\N	产品4
\.


--
-- Data for Name: doctrine_migration_versions; Type: TABLE DATA; Schema: public; Owner: river
--

COPY public.doctrine_migration_versions (version, executed_at, execution_time) FROM stdin;
DoctrineMigrations\\Version20240222042458	2024-03-01 01:32:40	83
DoctrineMigrations\\Version20240222094833	2024-03-01 01:32:40	22
DoctrineMigrations\\Version20240222095118	2024-03-01 01:32:40	1
DoctrineMigrations\\Version20240222100801	2024-03-01 01:32:40	18
DoctrineMigrations\\Version20240222102005	2024-03-01 01:32:40	20
DoctrineMigrations\\Version20240222102418	2024-03-01 01:32:40	19
DoctrineMigrations\\Version20240222102935	2024-03-01 01:32:40	19
DoctrineMigrations\\Version20240222104217	2024-03-01 01:32:40	20
DoctrineMigrations\\Version20240222132559	2024-03-01 01:32:40	1
DoctrineMigrations\\Version20240223045006	2024-03-01 01:32:40	1
DoctrineMigrations\\Version20240223152203	2024-03-01 01:32:40	1
DoctrineMigrations\\Version20240223152413	2024-03-01 01:32:40	2
DoctrineMigrations\\Version20240223160609	2024-03-01 01:32:40	1
DoctrineMigrations\\Version20240225041445	2024-03-01 01:32:40	4
DoctrineMigrations\\Version20240225044305	2024-03-01 01:32:40	3
DoctrineMigrations\\Version20240225044816	2024-03-01 01:32:40	1
DoctrineMigrations\\Version20240225044933	2024-03-01 01:32:40	1
DoctrineMigrations\\Version20240225045017	2024-03-01 01:32:40	1
DoctrineMigrations\\Version20240228024848	2024-03-01 01:32:40	7
DoctrineMigrations\\Version20240228025306	2024-03-01 01:32:40	7
DoctrineMigrations\\Version20240301013601	2024-03-01 01:42:58	24
DoctrineMigrations\\Version20240301020455	2024-03-01 02:15:55	28
DoctrineMigrations\\Version20240301022648	2024-03-01 02:27:50	28
DoctrineMigrations\\Version20240301025447	2024-03-01 02:54:59	10
DoctrineMigrations\\Version20240301053808	2024-03-01 05:38:11	28
DoctrineMigrations\\Version20240301054108	2024-03-01 05:42:00	23
DoctrineMigrations\\Version20240301054458	2024-03-01 05:46:07	26
DoctrineMigrations\\Version20240301055016	2024-03-01 05:50:21	15
DoctrineMigrations\\Version20240301061341	2024-03-01 06:13:47	9
DoctrineMigrations\\Version20240301064830	2024-03-01 06:49:09	28
DoctrineMigrations\\Version20240301065251	2024-03-01 06:53:33	28
DoctrineMigrations\\Version20240301071734	2024-03-01 07:18:06	29
DoctrineMigrations\\Version20240301072053	2024-03-01 07:21:16	26
\.


--
-- Data for Name: fertilizer; Type: TABLE DATA; Schema: public; Owner: river
--

COPY public.fertilizer (id, pattern_id, date, cuo_shi1, shi_yong_liang1, cuo_shi2, shi_yong_liang2, cuo_shi3, shi_yong_liang3, cuo_shi4, shi_yong_liang4, type) FROM stdin;
19	4	\N	\N	\N	\N	\N	\N	\N	\N	\N	第1次
20	4	\N	\N	\N	\N	\N	\N	\N	\N	\N	第2次
21	4	\N	\N	\N	\N	\N	\N	\N	\N	\N	第3次
22	4	\N	\N	\N	\N	\N	\N	\N	\N	\N	第4次
23	4	\N	\N	\N	\N	\N	\N	\N	\N	\N	第5次
24	4	\N	\N	\N	\N	\N	\N	\N	\N	\N	第6次
\.


--
-- Data for Name: irrigation; Type: TABLE DATA; Schema: public; Owner: river
--

COPY public.irrigation (id, pattern_id, date, guan_shui_liang, type) FROM stdin;
41	4	\N	\N	第5次
42	4	\N	\N	第6次
43	4	\N	\N	第7次
44	4	\N	\N	第8次
45	4	\N	\N	第9次
46	4	\N	\N	第10次
47	4	\N	\N	第11次
48	4	\N	\N	第12次
37	4	2024-03-01	888887	第1次
38	4	\N	22222222	第2次
39	4	\N	777788	第3次
40	4	\N	1	第4次
\.


--
-- Data for Name: messenger_messages; Type: TABLE DATA; Schema: public; Owner: river
--

COPY public.messenger_messages (id, body, headers, queue_name, created_at, available_at, delivered_at) FROM stdin;
\.


--
-- Data for Name: pattern; Type: TABLE DATA; Schema: public; Owner: river
--

COPY public.pattern (id, name, location, latitude, longitude, area, tu_rang_zhi_di, yan_jian_cheng_du, di_li_deng_ji, yan_jian_cheng_yin, zhu_yao_zhang_ai, zhong_zhi_zuo_wu, guan_pai_xie_tong, xiao_zhang_pei_fei, zhong_zi_nong_yi, gen_zong_jian_ce, mo_shi_dan_jia, mo_shi_zong_jia, zhong_shi_dan_chan, guan_gai_ding_e, yan_jian_xia_jiang, di_li_ti_sheng, dan_chan_ti_sheng, shui_xiao_ti_sheng, yan_zheng_zhuan_ti, zhuan_ti_fu_ze_ren, shi_shi_fu_ze_ren, guan_pai_she_ji, pei_fei_she_ji, zhong_zi_que_ren, nong_yi_she_ji, jian_ce_shen_he, mo_shi_shen_he, ke_ti_shen_pi, xiang_mu_pi_zhun, gao_cheng, yan_hua_jian_hua, quan_yan_liang, you_ji_zhi_han_liang, ec, ph, guan_gai_fang_shi, fei_liao_shi_yong, yu_qi_dan_chan, chan_neng_ti_sheng, tou_ru, chan_chu, guan_pai_xie_tong_cuo_shi, xiao_zhang_pei_fei_yao_dian, nong_yi_zai_pei_te_dian, gen_zong_jian_ce_fang_an, zu_zhi_shi_shi_xie_tong, image, created_at, updated_at, zhong_zi_pin_zhong, sn, guan_gai_ci_shu, zong_guan_shui_liang, pai_shui_fang_shi, pai_shui_mai_shen, pai_shui_jian_ju, hui_yong_neng_li, hui_yong_kong_zhi_shui_zhi, zhong_shi_mian_ji, zhu_ze_zhuan_ti, she_ji_zong_tou_ru, he_suan_zong_tou_ru, mu_jun_tou_ru, mu_jun_chan_chu, chan_tou_bi, xiao_zhang_cuo_shi, zeng_tan_pei_fei, nong_yi_zhi_bao, yu_qi_zong_chan, guan_pai_xie_tong_shen_he, xiao_zhang_pei_fei_shen_he, zhong_zi_nong_yi_shen_he, gen_zong_jian_ce_shen_he, ji_shu_mo_shi_shen_he, cai_wu_yu_suan_shen_he) FROM stdin;
4	jkjkjk	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	精准滴灌水肥一体化+太阳能暗管强排	\N	\N	好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好好	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	2024-03-01 06:08:38	\N	\N	8888	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N
\.


--
-- Data for Name: seed; Type: TABLE DATA; Schema: public; Owner: river
--

COPY public.seed (id, pattern_id, date, nong_yi_ji_shu, wu_li_jie_gou_gai_shan, cuo_shi3, type) FROM stdin;
25	4	\N	\N	\N	\N	第1次
26	4	\N	\N	\N	\N	第2次
27	4	\N	\N	\N	\N	第3次
28	4	\N	\N	\N	\N	第4次
29	4	\N	\N	\N	\N	第5次
30	4	\N	\N	\N	\N	第6次
31	4	\N	\N	\N	\N	第7次
32	4	\N	\N	\N	\N	第8次
\.


--
-- Data for Name: soil; Type: TABLE DATA; Schema: public; Owner: river
--

COPY public.soil (id, pattern_id, nian_fen_sha, tu_rang_zhi_di, gan_rong_liang, kong_xi_du, quan_dan, quan_lin, quan_jia, you_ji_zhi, xiao_tai_dan, an_tai_dan, you_xiao_lin, you_xiao_jia, jian_jie_dan, quan_yan_liang, ec, ph, bao_he_han_shui_lv, bao_he_dao_shui_lv, tian_jian_chi_shui_liang, type) FROM stdin;
13	4	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	0-20cm
14	4	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	20-40cm
15	4	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	40-60cm
16	4	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	\N	60-80cm
\.


--
-- Data for Name: tracking; Type: TABLE DATA; Schema: public; Owner: river
--

COPY public.tracking (id, pattern_id, fang_fa_she_bei, jian_ce_pin_ci, xian_di_yuan_cheng, jian_ce_zhuan_ti, type) FROM stdin;
22	4	\N	\N	\N	\N	1.气象水文环境
23	4	\N	\N	\N	\N	2.灌溉
24	4	\N	\N	\N	\N	3.排水
25	4	\N	\N	\N	\N	4.施肥
26	4	\N	\N	\N	\N	5.水分运动
27	4	\N	\N	\N	\N	6.盐分运动
28	4	\N	\N	\N	\N	7.作物生长
\.


--
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: river
--

COPY public."user" (id, username, roles, password, plain_password, openid, name, phone, avatar) FROM stdin;
\.


--
-- Name: cost_id_seq; Type: SEQUENCE SET; Schema: public; Owner: river
--

SELECT pg_catalog.setval('public.cost_id_seq', 56, true);


--
-- Name: fertilizer_id_seq; Type: SEQUENCE SET; Schema: public; Owner: river
--

SELECT pg_catalog.setval('public.fertilizer_id_seq', 24, true);


--
-- Name: irrigation_id_seq; Type: SEQUENCE SET; Schema: public; Owner: river
--

SELECT pg_catalog.setval('public.irrigation_id_seq', 48, true);


--
-- Name: messenger_messages_id_seq; Type: SEQUENCE SET; Schema: public; Owner: river
--

SELECT pg_catalog.setval('public.messenger_messages_id_seq', 1, false);


--
-- Name: pattern_id_seq; Type: SEQUENCE SET; Schema: public; Owner: river
--

SELECT pg_catalog.setval('public.pattern_id_seq', 4, true);


--
-- Name: seed_id_seq; Type: SEQUENCE SET; Schema: public; Owner: river
--

SELECT pg_catalog.setval('public.seed_id_seq', 32, true);


--
-- Name: soil_id_seq; Type: SEQUENCE SET; Schema: public; Owner: river
--

SELECT pg_catalog.setval('public.soil_id_seq', 16, true);


--
-- Name: tracking_id_seq; Type: SEQUENCE SET; Schema: public; Owner: river
--

SELECT pg_catalog.setval('public.tracking_id_seq', 28, true);


--
-- Name: user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: river
--

SELECT pg_catalog.setval('public.user_id_seq', 1, false);


--
-- Name: cost cost_pkey; Type: CONSTRAINT; Schema: public; Owner: river
--

ALTER TABLE ONLY public.cost
    ADD CONSTRAINT cost_pkey PRIMARY KEY (id);


--
-- Name: doctrine_migration_versions doctrine_migration_versions_pkey; Type: CONSTRAINT; Schema: public; Owner: river
--

ALTER TABLE ONLY public.doctrine_migration_versions
    ADD CONSTRAINT doctrine_migration_versions_pkey PRIMARY KEY (version);


--
-- Name: fertilizer fertilizer_pkey; Type: CONSTRAINT; Schema: public; Owner: river
--

ALTER TABLE ONLY public.fertilizer
    ADD CONSTRAINT fertilizer_pkey PRIMARY KEY (id);


--
-- Name: irrigation irrigation_pkey; Type: CONSTRAINT; Schema: public; Owner: river
--

ALTER TABLE ONLY public.irrigation
    ADD CONSTRAINT irrigation_pkey PRIMARY KEY (id);


--
-- Name: messenger_messages messenger_messages_pkey; Type: CONSTRAINT; Schema: public; Owner: river
--

ALTER TABLE ONLY public.messenger_messages
    ADD CONSTRAINT messenger_messages_pkey PRIMARY KEY (id);


--
-- Name: pattern pattern_pkey; Type: CONSTRAINT; Schema: public; Owner: river
--

ALTER TABLE ONLY public.pattern
    ADD CONSTRAINT pattern_pkey PRIMARY KEY (id);


--
-- Name: seed seed_pkey; Type: CONSTRAINT; Schema: public; Owner: river
--

ALTER TABLE ONLY public.seed
    ADD CONSTRAINT seed_pkey PRIMARY KEY (id);


--
-- Name: soil soil_pkey; Type: CONSTRAINT; Schema: public; Owner: river
--

ALTER TABLE ONLY public.soil
    ADD CONSTRAINT soil_pkey PRIMARY KEY (id);


--
-- Name: tracking tracking_pkey; Type: CONSTRAINT; Schema: public; Owner: river
--

ALTER TABLE ONLY public.tracking
    ADD CONSTRAINT tracking_pkey PRIMARY KEY (id);


--
-- Name: user user_pkey; Type: CONSTRAINT; Schema: public; Owner: river
--

ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_pkey PRIMARY KEY (id);


--
-- Name: idx_1525a45cf734a20f; Type: INDEX; Schema: public; Owner: river
--

CREATE INDEX idx_1525a45cf734a20f ON public.fertilizer USING btree (pattern_id);


--
-- Name: idx_182694fcf734a20f; Type: INDEX; Schema: public; Owner: river
--

CREATE INDEX idx_182694fcf734a20f ON public.cost USING btree (pattern_id);


--
-- Name: idx_4487e306f734a20f; Type: INDEX; Schema: public; Owner: river
--

CREATE INDEX idx_4487e306f734a20f ON public.seed USING btree (pattern_id);


--
-- Name: idx_75ea56e016ba31db; Type: INDEX; Schema: public; Owner: river
--

CREATE INDEX idx_75ea56e016ba31db ON public.messenger_messages USING btree (delivered_at);


--
-- Name: idx_75ea56e0e3bd61ce; Type: INDEX; Schema: public; Owner: river
--

CREATE INDEX idx_75ea56e0e3bd61ce ON public.messenger_messages USING btree (available_at);


--
-- Name: idx_75ea56e0fb7336f0; Type: INDEX; Schema: public; Owner: river
--

CREATE INDEX idx_75ea56e0fb7336f0 ON public.messenger_messages USING btree (queue_name);


--
-- Name: idx_a87c621cf734a20f; Type: INDEX; Schema: public; Owner: river
--

CREATE INDEX idx_a87c621cf734a20f ON public.tracking USING btree (pattern_id);


--
-- Name: idx_bae1ae08f734a20f; Type: INDEX; Schema: public; Owner: river
--

CREATE INDEX idx_bae1ae08f734a20f ON public.irrigation USING btree (pattern_id);


--
-- Name: idx_eb7ea1eef734a20f; Type: INDEX; Schema: public; Owner: river
--

CREATE INDEX idx_eb7ea1eef734a20f ON public.soil USING btree (pattern_id);


--
-- Name: uniq_8d93d649f85e0677; Type: INDEX; Schema: public; Owner: river
--

CREATE UNIQUE INDEX uniq_8d93d649f85e0677 ON public."user" USING btree (username);


--
-- Name: messenger_messages notify_trigger; Type: TRIGGER; Schema: public; Owner: river
--

CREATE TRIGGER notify_trigger AFTER INSERT OR UPDATE ON public.messenger_messages FOR EACH ROW EXECUTE FUNCTION public.notify_messenger_messages();


--
-- Name: fertilizer fk_1525a45cf734a20f; Type: FK CONSTRAINT; Schema: public; Owner: river
--

ALTER TABLE ONLY public.fertilizer
    ADD CONSTRAINT fk_1525a45cf734a20f FOREIGN KEY (pattern_id) REFERENCES public.pattern(id);


--
-- Name: cost fk_182694fcf734a20f; Type: FK CONSTRAINT; Schema: public; Owner: river
--

ALTER TABLE ONLY public.cost
    ADD CONSTRAINT fk_182694fcf734a20f FOREIGN KEY (pattern_id) REFERENCES public.pattern(id);


--
-- Name: seed fk_4487e306f734a20f; Type: FK CONSTRAINT; Schema: public; Owner: river
--

ALTER TABLE ONLY public.seed
    ADD CONSTRAINT fk_4487e306f734a20f FOREIGN KEY (pattern_id) REFERENCES public.pattern(id);


--
-- Name: tracking fk_a87c621cf734a20f; Type: FK CONSTRAINT; Schema: public; Owner: river
--

ALTER TABLE ONLY public.tracking
    ADD CONSTRAINT fk_a87c621cf734a20f FOREIGN KEY (pattern_id) REFERENCES public.pattern(id);


--
-- Name: irrigation fk_bae1ae08f734a20f; Type: FK CONSTRAINT; Schema: public; Owner: river
--

ALTER TABLE ONLY public.irrigation
    ADD CONSTRAINT fk_bae1ae08f734a20f FOREIGN KEY (pattern_id) REFERENCES public.pattern(id);


--
-- Name: soil fk_eb7ea1eef734a20f; Type: FK CONSTRAINT; Schema: public; Owner: river
--

ALTER TABLE ONLY public.soil
    ADD CONSTRAINT fk_eb7ea1eef734a20f FOREIGN KEY (pattern_id) REFERENCES public.pattern(id);


--
-- PostgreSQL database dump complete
--

