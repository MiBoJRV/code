import React, { ReactNode } from 'react';
import cn from 'classnames';
import { BracketTechLeftIcon, BracketTechRightIcon } from 'src/assets/icons';

type BoxProps = {
  className?: string;
  children: ReactNode;
};
export const TechAndBusinessOptionBox: React.FC<BoxProps> = ({
  className = '',
  children,
}): JSX.Element => (
  <li
    className={cn(
      'relative flex justify-center max-w-[640px] md:max-w-[48%] lg:max-w-[640px] lg:min-h-[346px]',
      className
    )}
  >
    <div className="absolute left-0 w-1/2 h-full overflow-hidden">
      <BracketTechLeftIcon className="absolute h-full w-auto left-0" />
    </div>
    {children}
    <div className="absolute right-0 w-1/2 h-full overflow-hidden">
      <BracketTechRightIcon className="absolute h-full w-auto right-0" />
    </div>
  </li>
);
