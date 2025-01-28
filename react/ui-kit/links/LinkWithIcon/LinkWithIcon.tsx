import React, { ReactNode } from 'react';
import cn from 'classnames';

type LinkWithIconProps = {
  title?: string;
  href?: string;
  icon?: ReactNode;
  className?: string;
};

export const LinkWithIcon: React.FC<LinkWithIconProps> = ({
  title,
  href,
  icon,
  className,
}): JSX.Element => (
  <a
    className={cn(
      'group block max-w-fit py-1 text-grey hover:text-blue-light transition-all',
      className
    )}
    href={href}
  >
    <div className="flex items-center">
      {icon && icon}
      <span className="relative font-medium text-menu after:content-[''] after:absolute after:left-0 after:bottom-0 after:right-0  after:border-b-[1.5px] after:border-transparent group-hover:after:border-blue-light transition-all">
        {title}
      </span>
    </div>
  </a>
);
