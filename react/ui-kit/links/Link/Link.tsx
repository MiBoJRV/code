import React from 'react';
import cn from 'classnames';
import { ArrowIcon } from 'src/assets/icons';

type LinkProps = {
  title: string;
  href: string;
  className?: string;
};

export const Link: React.FC<LinkProps> = ({
  title,
  href,
  className,
}): JSX.Element => (
  <a
    className={cn(
      'group block max-w-fit text-grey hover:text-blue-logo transition-all !duration-[50ms]',
      className
    )}
    href={href}
  >
    <div className="flex items-center">
      <span className="relative font-medium text-link after:content-[''] after:absolute after:left-0 after:bottom-[5px] after:right-0  after:border-b-[1.5px] after:border-grey group-hover:after:border-transparent transition-all !duration-[50ms]">
        {title}
      </span>
      <div className="ml-2.5 group-hover:translate-x-2.5 transition-all !duration-[50ms]">
        <ArrowIcon fillColor="currentColor" />
      </div>
    </div>
  </a>
);
