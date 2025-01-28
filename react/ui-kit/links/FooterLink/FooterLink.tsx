import React from 'react';
import cn from 'classnames';

type TextLinkProps = {
  title?: string;
  href?: string;
  fontSize?: string;
  className?: string;
};

export const FooterLink: React.FC<TextLinkProps> = ({
  title,
  href,
  fontSize = 'text-link',
  className,
}): JSX.Element => (
  <a
    className={cn(
      `unset max-w-fit text-grey relative font-medium ${fontSize} hover:text-blue-light hover:border-b hover:border-b-blue-light hover:border-b-solid transition-all`,
      className
    )}
    href={href}
  >
    {title}
  </a>
);
