
type program2 = toplevel2 list
 and toplevel2 = Ast_hs.toplevel * info_item
     (* the token list contains also the comment-tokens *)
     and info_item = (string * Parser_hs.token list)

(* This is the main function *)
val parse:
  Common.filename -> (program2 * Parse_info.parsing_stat)


(* internal *)
val tokens: Common.filename -> Parser_hs.token list

