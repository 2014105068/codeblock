USE easyblock;

CREATE TABLE IF NOT EXISTS ci_sessions (
	session_id varchar(40) DEFAULT 0 NOT NULL PRIMARY KEY,
    ip_address varchar(40) DEFAULT 0 NOT NULL,
    user_agent varchar(120) NOT NULL,
    last_activity int(10) unsigned DEFAULT 0 NOT NULL,
    user_data text NOT NULL,
    KEY last_activity_idx (last_activity)
    );