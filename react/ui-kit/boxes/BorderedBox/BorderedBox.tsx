import React, { ReactNode } from 'react';
import cn from 'classnames';
import borderImage from 'src/assets/images/borderedBox.svg';

type BorderedBoxProps = {
  className?: string;
  children?: ReactNode;
};
export const BorderedBox: React.FC<BorderedBoxProps> = ({
  className,
  children,
}): JSX.Element => (
  <li className={cn('relative', className)}>
    <img
      className="w-full h-auto group-hover/withoutHover:opacity-1 group-hover/withHover:opacity-0 xs:max-h-[185px] xs:max-w-[185px] lg:max-h-[310px] lg:max-w-[310px] "
      src={borderImage}
      alt="border"
    />
    {children}
  </li>
);
