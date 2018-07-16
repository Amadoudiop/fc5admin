SELECT *
FROM `player`
LEFT JOIN `player_a_t_k_stats` ON `player`.id = `player_a_t_k_stats`.id
LEFT JOIN `player_d_e_f_stats` ON `player`.id = `player_d_e_f_stats`.id
LEFT JOIN `player_g_k_stats` ON `player`.id = `player_g_k_stats`.id
LEFT JOIN `player_s_p_e_stats` ON `player`.id = `player_s_p_e_stats`.id
LIMIT 10000