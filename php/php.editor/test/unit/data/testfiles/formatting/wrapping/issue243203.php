<?php

$html = new html\document(
        new html\body(
                'plain text',
                new html\br(),
                new html\b('bold'),
                new html\footer('test footer'),
                new html\div(
                        new html\_class('testClass'),
                        new html\input_readonly(
                                new html\_value('test')
                        )
                )
        )
);

$html2 = new html\document(new html\body(
'plain text',
new html\br(),
new html\b('bold'),
new html\footer('test footer'),
new html\div(
        new html\_class('testClass'),
        new html\input_readonly(
                new html\_value('test')
        )
)
)
);

new html\document(new html\body(
'plain text',
new html\br(),
new html\b('bold'),
new html\footer('test footer'),
new html\div(
        new html\_class('testClass'),
        new html\input_readonly(
                new html\_value('test')
        )
)
)
);

$html3 = new html\document(
new html\body('plain text',new html\br(),new html\b('bold'),new html\footer('test footer'),
 new html\div(
     new html\_class('testClass'),new html\input_readonly(new html\_value('test'))
     )
  )
);

return new html\document(
        new html\body(
                'plain text',
                new html\br(),
                new html\b('bold'),
                new html\footer('test footer'),
                new html\div(
                        new html\_class('testClass'),
                        new html\input_readonly(
                                new html\_value('test')
                        )
                )
        )
);
