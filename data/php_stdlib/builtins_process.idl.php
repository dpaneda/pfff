<?php
// THIS IS AUTOGENERATED BY builtins_php.ml
function pcntl_alarm($seconds) { }
function pcntl_exec($path, $args = null_array, $envs = null_array) { }
function pcntl_fork() { }
function pcntl_getpriority($pid = 0, $process_identifier = 0) { }
function pcntl_setpriority($priority, $pid = 0, $process_identifier = 0) { }
function pcntl_signal($signo, $handler, $restart_syscalls = true) { }
function pcntl_wait(&$status, $options = 0) { }
function pcntl_waitpid($pid, &$status, $options = 0) { }
function pcntl_wexitstatus($status) { }
function pcntl_wifexited($status) { }
function pcntl_wifsignaled($status) { }
function pcntl_wifstopped($status) { }
function pcntl_wstopsig($status) { }
function pcntl_wtermsig($status) { }
function pcntl_signal_dispatch() { }
function shell_exec($cmd) { }
function exec($command, &$output = null, &$return_var = null) { }
function passthru($command, &$return_var = null) { }
function system($command, &$return_var = null) { }
function proc_open($cmd, $descriptorspec, &$pipes, $cwd = null_string, $env = null_variant, $other_options = null_variant) { }
function proc_terminate($process, $signal = 0) { }
function proc_close($process) { }
function proc_get_status($process) { }
function proc_nice($increment) { }
function escapeshellarg($arg) { }
function escapeshellcmd($command) { }
