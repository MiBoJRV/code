import React, { ReactNode } from 'react';
import cn from 'classnames';
import boxImage from 'src/assets/images/ctoOptionBox.svg';

type BoxProps = {
  className?: string;
  children: ReactNode;
};
export const CtoOptionBox: React.FC<BoxProps> = ({
  className,
  children,
}): JSX.Element => (
  <li className={cn('relative h-[320px]', className)}>
    <img className="w-full h-auto " src={boxImage} alt="box" />
    {children}
  </li>
);
