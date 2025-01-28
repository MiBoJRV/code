import React, { ReactNode } from 'react';
import cn from 'classnames';

type BorderedBoxProps = {
  className?: string;
  children: ReactNode;
};
export const ApproachBox: React.FC<BorderedBoxProps> = ({
  className,
  children,
}): JSX.Element => (
  <li
    className={cn(
      'bg-app-box-mob w-[290px] h-[164px] bg-no-repeat bg-center bg-contain py-4 px-5 xs:px-8 xs:bg-app-box xs:h-[185px] xs:w-[185px] lg:px-[50px] lg:py-[35px] lg:h-[310px] lg:w-[310px]',
      className
    )}
  >
    {children}
  </li>
);
