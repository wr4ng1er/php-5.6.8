--TEST--
DateTime::add() -- february 
--CREDITS--
Daniel Convissor <danielc@php.net>
--FILE--
<?php

require 'examine_diff.inc';
define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
require 'DateTime_data-february.inc';

?>
--EXPECT--
test_bug_49081__1: ADD: 2010-03-01 00:00:00 EST + P+0Y0M30DT0H0M0S = **2010-03-31 00:00:00 EDT**
test_bug_49081__2: ADD: 2010-03-01 00:00:00 EST + P+0Y1M0DT0H0M0S = **2010-04-01 00:00:00 EDT**
test_bug_49081__3: ADD: 2010-03-31 00:00:00 EDT + P+0Y0M1DT0H0M0S = **2010-04-01 00:00:00 EDT**
test_bug_49081__4: ADD: 2010-03-31 00:00:00 EDT + P+0Y0M29DT0H0M0S = **2010-04-29 00:00:00 EDT**
test_bug_49081__5: ADD: 2010-03-31 00:00:00 EDT + P+0Y0M30DT0H0M0S = **2010-04-30 00:00:00 EDT**
test_bug_49081__6: ADD: 2010-03-30 00:00:00 EDT + P+0Y1M0DT0H0M0S = **2010-04-30 00:00:00 EDT**
test_bug_49081__7: ADD: 2010-03-29 00:00:00 EDT + P+0Y1M1DT0H0M0S = **2010-04-30 00:00:00 EDT**
test_bug_49081__8: ADD: 2010-01-01 00:00:00 EST + P+0Y0M28DT0H0M0S = **2010-01-29 00:00:00 EST**
test_bug_49081__9: ADD: 2010-01-01 00:00:00 EST + P+0Y0M29DT0H0M0S = **2010-01-30 00:00:00 EST**
test_bug_49081__10: ADD: 2010-01-01 00:00:00 EST + P+0Y0M30DT0H0M0S = **2010-01-31 00:00:00 EST**
test_bug_49081__11: ADD: 2010-01-01 00:00:00 EST + P+0Y1M0DT0H0M0S = **2010-02-01 00:00:00 EST**
test_bug_49081__12: ADD: 2010-01-31 00:00:00 EST + P+0Y0M1DT0H0M0S = **2010-02-01 00:00:00 EST**
test_bug_49081__13: ADD: 2010-01-31 00:00:00 EST + P+0Y0M27DT0H0M0S = **2010-02-27 00:00:00 EST**
test_bug_49081__14: ADD: 2010-01-31 00:00:00 EST + P+0Y0M28DT0H0M0S = **2010-02-28 00:00:00 EST**
test_bug_49081__15: ADD: 2010-01-30 00:00:00 EST + P+0Y0M29DT0H0M0S = **2010-02-28 00:00:00 EST**
test_bug_49081__16: ADD: 2010-01-29 00:00:00 EST + P+0Y0M30DT0H0M0S = **2010-02-28 00:00:00 EST**
test_bug_49081__17: ADD: 2010-01-28 00:00:00 EST + P+0Y1M0DT0H0M0S = **2010-02-28 00:00:00 EST**
test_bug_49081__18: ADD: 2010-01-27 00:00:00 EST + P+0Y1M1DT0H0M0S = **2010-02-28 00:00:00 EST**
test_bug_49081__19: ADD: 2010-01-01 00:00:00 EST + P+0Y2M0DT0H0M0S = **2010-03-01 00:00:00 EST**
test_bug_49081__20: ADD: 2010-01-31 00:00:00 EST + P+0Y0M29DT0H0M0S = **2010-03-01 00:00:00 EST**
test_bug_49081__21: ADD: 2010-01-31 00:00:00 EST + P+0Y1M24DT0H0M0S = **2010-03-27 00:00:00 EDT**
test_bug_49081__22: ADD: 2010-01-31 00:00:00 EST + P+0Y1M25DT0H0M0S = **2010-03-28 00:00:00 EDT**
test_bug_49081__23: ADD: 2010-01-31 00:00:00 EST + P+0Y1M26DT0H0M0S = **2010-03-29 00:00:00 EDT**
test_bug_49081__24: ADD: 2010-01-31 00:00:00 EST + P+0Y1M27DT0H0M0S = **2010-03-30 00:00:00 EDT**
test_bug_49081__25: ADD: 2010-01-31 00:00:00 EST + P+0Y2M0DT0H0M0S = **2010-03-31 00:00:00 EDT**
test_bug_49081__26: ADD: 2010-01-30 00:00:00 EST + P+0Y2M1DT0H0M0S = **2010-03-31 00:00:00 EDT**
test_bug_49081__27: ADD: 2009-01-01 00:00:00 EST + P+0Y0M30DT0H0M0S = **2009-01-31 00:00:00 EST**
test_bug_49081__28: ADD: 2010-02-28 00:00:00 EST + P+0Y0M27DT0H0M0S = **2010-03-27 00:00:00 EDT**
test_bug_49081__29: ADD: 2010-02-28 00:00:00 EST + P+0Y1M0DT0H0M0S = **2010-03-28 00:00:00 EDT**
test_bug_49081__30: ADD: 2010-02-28 00:00:00 EST + P+0Y1M1DT0H0M0S = **2010-03-29 00:00:00 EDT**
test_bug_49081__31: ADD: 2010-02-27 00:00:00 EST + P+0Y1M0DT0H0M0S = **2010-03-27 00:00:00 EDT**
test_bug_49081__32: ADD: 2010-02-26 00:00:00 EST + P+0Y1M1DT0H0M0S = **2010-03-27 00:00:00 EDT**
test_bug_49081_negative__1: ADD: 2010-03-31 00:00:00 EDT + P-0Y0M30DT0H0M0S = **2010-03-01 00:00:00 EST**
test_bug_49081_negative__2: ADD: 2010-04-01 00:00:00 EDT + P-0Y1M0DT0H0M0S = **2010-03-01 00:00:00 EST**
test_bug_49081_negative__3: ADD: 2010-04-01 00:00:00 EDT + P-0Y0M1DT0H0M0S = **2010-03-31 00:00:00 EDT**
test_bug_49081_negative__4: ADD: 2010-04-29 00:00:00 EDT + P-0Y0M29DT0H0M0S = **2010-03-31 00:00:00 EDT**
test_bug_49081_negative__5: ADD: 2010-04-30 00:00:00 EDT + P-0Y0M30DT0H0M0S = **2010-03-31 00:00:00 EDT**
test_bug_49081_negative__6: ADD: 2010-04-30 00:00:00 EDT + P-0Y1M0DT0H0M0S = **2010-03-30 00:00:00 EDT**
test_bug_49081_negative__7: ADD: 2010-04-30 00:00:00 EDT + P-0Y1M1DT0H0M0S = **2010-03-29 00:00:00 EDT**
test_bug_49081_negative__8: ADD: 2010-01-29 00:00:00 EST + P-0Y0M28DT0H0M0S = **2010-01-01 00:00:00 EST**
test_bug_49081_negative__9: ADD: 2010-01-30 00:00:00 EST + P-0Y0M29DT0H0M0S = **2010-01-01 00:00:00 EST**
test_bug_49081_negative__10: ADD: 2010-01-31 00:00:00 EST + P-0Y0M30DT0H0M0S = **2010-01-01 00:00:00 EST**
test_bug_49081_negative__11: ADD: 2010-02-01 00:00:00 EST + P-0Y1M0DT0H0M0S = **2010-01-01 00:00:00 EST**
test_bug_49081_negative__12: ADD: 2010-02-01 00:00:00 EST + P-0Y0M1DT0H0M0S = **2010-01-31 00:00:00 EST**
test_bug_49081_negative__13: ADD: 2010-02-27 00:00:00 EST + P-0Y0M27DT0H0M0S = **2010-01-31 00:00:00 EST**
test_bug_49081_negative__14: ADD: 2010-02-28 00:00:00 EST + P-0Y0M28DT0H0M0S = **2010-01-31 00:00:00 EST**
test_bug_49081_negative__15: ADD: 2010-02-28 00:00:00 EST + P-0Y0M29DT0H0M0S = **2010-01-30 00:00:00 EST**
test_bug_49081_negative__16: ADD: 2010-02-28 00:00:00 EST + P-0Y0M30DT0H0M0S = **2010-01-29 00:00:00 EST**
test_bug_49081_negative__17: ADD: 2010-02-28 00:00:00 EST + P-0Y1M0DT0H0M0S = **2010-01-28 00:00:00 EST**
test_bug_49081_negative__18: ADD: 2010-02-28 00:00:00 EST + P-0Y1M1DT0H0M0S = **2010-01-27 00:00:00 EST**
test_bug_49081_negative__19: ADD: 2010-03-01 00:00:00 EST + P-0Y2M0DT0H0M0S = **2010-01-01 00:00:00 EST**
test_bug_49081_negative__20: ADD: 2010-03-01 00:00:00 EST + P-0Y1M1DT0H0M0S = **2010-01-31 00:00:00 EST**
test_bug_49081_negative__21: ADD: 2010-03-27 00:00:00 EDT + P-0Y1M27DT0H0M0S = **2010-01-31 00:00:00 EST**
test_bug_49081_negative__22: ADD: 2010-03-28 00:00:00 EDT + P-0Y1M28DT0H0M0S = **2010-01-31 00:00:00 EST**
test_bug_49081_negative__23: ADD: 2010-03-29 00:00:00 EDT + P-0Y1M29DT0H0M0S = **2010-01-31 00:00:00 EST**
test_bug_49081_negative__24: ADD: 2010-03-30 00:00:00 EDT + P-0Y1M30DT0H0M0S = **2010-01-31 00:00:00 EST**
test_bug_49081_negative__25: ADD: 2010-03-31 00:00:00 EDT + P-0Y2M0DT0H0M0S = **2010-01-31 00:00:00 EST**
test_bug_49081_negative__26: ADD: 2010-03-31 00:00:00 EDT + P-0Y2M1DT0H0M0S = **2010-01-30 00:00:00 EST**
test_bug_49081_negative__27: ADD: 2009-01-31 00:00:00 EST + P-0Y0M30DT0H0M0S = **2009-01-01 00:00:00 EST**
test_bug_49081_negative__28: ADD: 2010-03-27 00:00:00 EDT + P-0Y0M27DT0H0M0S = **2010-02-28 00:00:00 EST**
test_bug_49081_negative__29: ADD: 2010-03-28 00:00:00 EDT + P-0Y1M0DT0H0M0S = **2010-02-28 00:00:00 EST**
test_bug_49081_negative__30: ADD: 2010-03-29 00:00:00 EDT + P-0Y1M1DT0H0M0S = **2010-02-28 00:00:00 EST**
test_bug_49081_negative__31: ADD: 2010-03-27 00:00:00 EDT + P-0Y1M0DT0H0M0S = **2010-02-27 00:00:00 EST**
test_bug_49081_negative__32: ADD: 2010-03-27 00:00:00 EDT + P-0Y1M1DT0H0M0S = **2010-02-26 00:00:00 EST**
