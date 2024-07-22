<?php

enum Key: int {
    case Hash = 0;
    case Text = 102;
    case Integer = 40;
};

echo Key::Hash->value;
echo Key::Text->value;
