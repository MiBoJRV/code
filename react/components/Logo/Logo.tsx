import React from 'react';
import { LogoIcon } from 'src/assets/icons';
import { ROUTES } from 'src/constants';

type LogoProps = {
  containerClassname?: string;
};

export const Logo: React.FC<LogoProps> = ({
  containerClassname = '',
}): JSX.Element => (
  <a className={containerClassname} href={ROUTES.ROOT}>
    <LogoIcon className="w-[167px] h-[30px] lg:w-[190px] lg:h-[35px] " />
  </a>
);
