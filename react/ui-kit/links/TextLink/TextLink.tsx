import React from 'react';
import cn from 'classnames';

type TextLinkProps = {
  title?: string;
  href?: string;
  className?: string;
};

export const TextLink: React.FC<TextLinkProps> = ({
  title,
  href,
  className,
}): JSX.Element => (
  <a
    className={cn(
      "block max-w-fit text-grey relative font-medium text-link after:content-[''] after:absolute after:left-0 after:bottom-[5px] after:right-0 after:border-b-0 after:border-blue-light group-hover:after:border-b-[1.5px] group-hover:after:border-grey transition-all xs:after:bottom-[-2px] lg:after:bottom-[5px]",
      className
    )}
    href={href}
  >
    {title}
  </a>
);
